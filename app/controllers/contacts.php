<?php
if(!defined('APP_VERSION')) die('access denied');

function contacts_index(array $params = []): void
{
    $contacts = [
        [
            'img' => 'telegram.png',
            'img_alt' => 'Telegram',
            'username' => 'iikworks',
            'link' => 'https://t.me/iikworks',
        ], [
            'img' => 'kwork.png',
            'img_alt' => 'Kwork',
            'username' => 'iikworks',
            'link' => 'https://kwork.ru/user/iikworks',
        ], [
            'img' => 'github.png',
            'img_alt' => 'Github',
            'username' => 'iikworks',
            'link' => 'https://github.com/iikworks',
        ],
    ];

    tpl_include('contacts', [
        'title' => 'Контакты',
        'page' => 'contacts',
        'contacts' => $contacts
    ]);
}