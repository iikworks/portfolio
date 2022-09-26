<?php
if(!defined('APP_VERSION')) die('access denied');

function load_config(string $path): void
{
    $config = include($path);

    foreach ($config as $key => $var) {
        if(!isset($_ENV['CONFIG_'.$key])) $_ENV['CONFIG_'.$key] = $var;
    }
}