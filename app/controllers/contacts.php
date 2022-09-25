<?php
if(!defined('APP_VERSION')) die('access denied');

function contacts_index(array $params = []): void
{
    tpl_include('contacts', [
        'title' => 'Контакты',
        'page' => 'contacts'
    ]);
}