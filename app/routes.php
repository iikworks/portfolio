<?php
if(!defined('APP_VERSION')) die('access denied');

return [
    [
        'pattern' => '/',
        'controller' => 'works:index',
    ], [
        'pattern' => '/work/<id:int>',
        'controller' => 'works:detail',
    ], [
        'pattern' => '/contacts',
        'controller' => 'contacts:index',
    ],
];