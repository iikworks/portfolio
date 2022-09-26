<?php
if(!defined('APP_VERSION')) die('access denied');

function load_config(string $path): void
{
    $config = include($path);

    foreach ($config as $key => $var) {
        define('CONFIG_'.$key, $var);
    }
}