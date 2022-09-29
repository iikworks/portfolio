<?php
namespace IIKWorks\Portfolio\App;

class Router
{
    private array $routes;

    public function __construct()
    {
        $this->routes = self::getConvertRoutes();
    }

    public function match(string $uri): array | bool
    {
        $match = [];

        foreach($this->routes as $route){
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
            if(!empty($match)) self::redirect(substr($uri, 0, -1));

            // Если в паттерне есть слеш в конце, но URI такой же, но без слеша в конце
            preg_match('~^'.$route['pattern'].'$~', $uri.'/', $match);
            if(!empty($match)) self::redirect($uri.'/');
        }

        return false;
    }

    public static function getRoutes(): array
    {
        return include(APP_ROOT.'/src/routes.php');
    }

    public static function getRules(): array
    {
        return include(APP_ROOT.'/src/rules.php');
    }

    public static function getConvertRoutes(): array
    {
        $convertedRoutes = [];

        foreach (self::getRoutes() as $route){
            foreach(self::getRules() as $key => $rule) {
                $route['pattern'] = preg_replace('~<([a-z]+):'.$key.'>~', '(?<$1>'.$rule.')', $route['pattern']);
            }
            $convertedRoutes[] = $route;
        }

        return $convertedRoutes;
    }

    public static function redirect(string $url): void
    {
        http_response_code(301);
        header('Location: '.$url);
        die();
    }

    public static function not_found(): void
    {
        http_response_code(404);
        echo 'not found';
        die();
    }

    public static function url_for(mixed $controller, string $method, array $params = []): string
    {
        foreach(self::getConvertRoutes() as $route){
            if($route['controller'][0] == $controller && $route['controller'][1] == $method) {
                $url = $route['pattern'];

                if(!empty($params)) {
                    foreach($params as $key => $param) {
                        foreach(self::getRules() as $rule) {
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

        return '/';
    }
}