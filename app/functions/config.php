<?php
if(!defined('APP_VERSION')) die('access denied');

function load_config(string $path): void
{
    $config = include($path);

    foreach ($config as $key => $var) {
        if(!isset($_ENV['CONFIG_'.$key])) $_ENV['CONFIG_'.$key] = $var;
    }

    unpack_database_url();
}

function unpack_database_url(): void
{
    if(isset($_ENV['DATABASE_URL'])){
        $match = [];
        preg_match('~^mysql://(?P<user>.+):(?P<password>.+)@(?P<host>.+)/(?P<name>.+)\?reconnect=true$~', $_ENV['DATABASE_URL'], $match);

        foreach ($match as $key => $var) {
            if($key != 0 && intval($key) == 0) {
                $_ENV['CONFIG_DB_'.strtoupper($key)] = $var;
            }
        }
    }
}