<?php
if(!defined('APP_VERSION')) die('access denied');

function works_index(): void
{
    tpl_include('index', [
        'title' => 'Работы',
        'page' => 'works'
    ]);
}