<?php if(!defined('APP_VERSION')) die('access denied'); ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?=$title?></title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/quartz.min.css" rel="stylesheet">
    <link href="/assets/font/inter.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/assets/img/logo.png" />
</head>
<body>
<div class="bs-component">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?=url_for('works:index')?>">
                <img src="/assets/img/logo.png" alt="Karprog" width="30">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'works') echo 'active'; ?>" href="<?=url_for('works:index')?>">Работы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'contacts') echo 'active'; ?>" href="<?=url_for('contacts:index')?>">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>