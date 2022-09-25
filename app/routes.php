<?php
if(!defined('APP_VERSION')) die('access denied');

return [
    [
        'pattern' => '/',
        'controller' => 'works:index',
    ], [
        'pattern' => '/contacts',
        'controller' => 'contacts:index',
    ],
];