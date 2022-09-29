<?php
use IIKWorks\Portfolio\App\Router;
use IIKWorks\Portfolio\App\Template;

function url_for(mixed $controller, string $method, array $params = []): string
{
    return Router::url_for($controller, $method, $params);
}

function view(string $name, array $vars): void
{
    $template = new Template(APP_ROOT.'/views');
    $template->view($name, $vars);
}