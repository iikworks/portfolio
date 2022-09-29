<?php
namespace IIKWorks\Portfolio\Controllers;

use IIKWorks\Portfolio\App\Controller;

class ContactsController extends Controller
{
    public function contacts(): void
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

        view('contacts', [
            'title' => 'Контакты',
            'page' => 'contacts',
            'contacts' => $contacts
        ]);
    }
}