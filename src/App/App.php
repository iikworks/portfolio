<?php
namespace IIKWorks\Portfolio\App;

class App
{
    private Config $config;
    private Router $router;
    private Database $db;

    public function __construct()
    {
        $this->initialConfig();
        $this->initialRouter();
        $this->initialDatabase();
    }

    public function initialConfig(): void
    {
        $config = new Config();
        $config->load(APP_ROOT.'/config.php');
        $this->config = $config;
    }

    public function initialRouter(): void
    {
        $this->router = new Router();
    }

    public function initialDatabase(): void
    {
        $this->db = new Database(
            $this->config->get('db_host'),
            $this->config->get('db_username'),
            $this->config->get('db_password'),
            $this->config->get('db_name'),
        );
    }

    public function __get(string $name)
    {
        return $this->$name;
    }

    public function run(): void
    {
        if($matched = $this->router->match($_SERVER['REQUEST_URI'])){
            $controllerClass = $matched['controller'][0];
            $method = $matched['controller'][1];

            $controller = new $controllerClass($this);
            $controller->$method(...$matched['params']);
        } else Router::not_found();
    }
}