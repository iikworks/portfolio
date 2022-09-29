<?php
namespace IIKWorks\Portfolio\App;

class Config
{
    private array $config;

    public function load(string $path): void
    {
        $config = include($path);

        foreach ($config as $key => $var) {
            $this->config[$key] = $var;
        }
    }

    public function get(string $key): string | int
    {
        return $this->config[$key];
    }

    public function get_multiple(string $key): array
    {

    }
}