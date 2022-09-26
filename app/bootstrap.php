<?php
if(!defined('APP_VERSION')) die('access denied');

$loading_dirs = ['functions', 'controllers'];

foreach($loading_dirs as $dir) {
    $files = array_diff(scandir(sprintf('%s/app/%s', APP_ROOT, $dir)), ['.', '..']);
    foreach($files as $file){
        require sprintf('%s/app/%s/%s', APP_ROOT, $dir, $file);
    }
}

load_config(APP_ROOT.'/config.php');

if($result = match_route($_SERVER['REQUEST_URI'])){
    str_replace(':', '_', $result['controller'])(...$result['params']);
} else not_found();