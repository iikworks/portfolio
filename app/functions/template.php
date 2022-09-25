<?php
if(!defined('APP_VERSION')) die('access denied');

function tpl_include(string $name, array $vars = []): void
{
    if(!empty($vars)) extract($vars);
    include(sprintf(APP_ROOT.'/views/%s.php', $name));
}