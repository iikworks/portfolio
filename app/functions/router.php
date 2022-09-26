<?php
if(!defined('APP_VERSION')) die('access denied');

function get_routes(): array
{
    return include(APP_ROOT.'/app/routes.php');
}

function get_rules(): array
{
    return include(APP_ROOT.'/app/rules.php');
}

function get_routes_converted(): array
{
    $routes = [];

    foreach (get_routes() as $route){
        foreach(get_rules() as $key => $rule) {
            $route['pattern'] = preg_replace('~<([a-z]+):'.$key.'>~', '(?<$1>'.$rule.')', $route['pattern']);
        }
        $routes[] = $route;
    }

    return $routes;
}

function match_route(string $uri): array | bool
{
    $match = [];

    foreach(get_routes_converted() as $route){
        // Точное соответствие
        preg_match('~^'.$route['pattern'].'$~', $uri, $match);
        if(!empty($match)){
            $params = [];
            foreach($match as $key => $param) {
                if(!intval($key) && $key != 0){
                    if(intval($param) != 0) $params[$key] = intval($param);
                    else $params[$key] = $param;
                }
            }

            return [
                'controller' => $route['controller'],
                'params' => $params
            ];
        }

        // Если в URI есть слеш в конце, но есть такой же паттерн без слеша в конце
        preg_match('~^'.$route['pattern'].'/$~', $uri, $match);
        if(!empty($match)) redirect(substr($uri, 0, -1));

        // Если в паттерне есть слеш в конце, но URI такой же, но без слеша в конце
        preg_match('~^'.$route['pattern'].'$~', $uri.'/', $match);
        if(!empty($match)) redirect($uri.'/');
    }

    return false;
}

function url_for(string $controller, array $params = []): string
{
    foreach(get_routes_converted() as $route){
        if($route['controller'] == $controller) {
            $url = $route['pattern'];

            if(!empty($params)) {
                foreach($params as $key => $param) {
                    foreach(get_rules() as $rule) {
                        $replacement_chars = ['[', ']', '+'];
                        foreach($replacement_chars as $char){
                            $rule = str_replace($char, '\\'.$char, $rule);
                        }

                        $url = preg_replace('~\(\?<'.$key.'>'.$rule.'\)~', $param, $url);
                    }
                }
            }
            if (!$url) $url = $route['pattern'];

            return $url;
        };
    }
}

function redirect(string $uri): void
{
    http_response_code(301);
    header('Location: '.$uri);
    die();
}

function not_found(): void
{
    http_response_code(404);
    echo 'not found';
    die();
}
