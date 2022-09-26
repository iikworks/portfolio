<?php
if(!defined('APP_VERSION')) die('access denied');

function contacts_index(array $params = []): void
{
    $contacts = [
        [
            'img' => 'telegram.png',
            'img_alt' => 'Telegram',
            'username' => 'trapmechanic01',
            'link' => 'https://t.me/trapmechanic01',
        ], [
            'img' => 'kwork.png',
            'img_alt' => 'Kwork',
            'username' => '_karprog',
            'link' => 'https://kwork.ru/user/_karprog',
        ], [
            'img' => 'github.png',
            'img_alt' => 'Github',
            'username' => 'karprog01',
            'link' => 'https://github.com/karprog01',
        ],
    ];

    tpl_include('contacts', [
        'title' => 'Контакты',
        'page' => 'contacts',
        'contacts' => $contacts
    ]);
}