<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <script src="/assets/js/tailwind"></script>
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/font/inter.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/img/logo.png" />
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-8 w-8 hover:blur-sm transition duration-300" src="/assets/img/logo.png" alt="Karprog">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <?=tpl_include('layout/menu', $vars)?>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden" onclick="toggleMobileTopNav()">
                    <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                        <svg id="mobile_nav_open_button" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg id="mobile_nav_close_button" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div id="mobile_nav" class="md:hidden hidden">
            <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                <?php
                    $vars['is_mobile'] = true;
                    tpl_include('layout/menu', $vars);
                ?>
            </div>
        </div>
    </nav>