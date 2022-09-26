<?php
if(!defined('APP_VERSION')) die('access denied');

function works_index(): void
{
    $works = db_get_all('works', 'created_at:desc');

    foreach($works as $key => $work) {
        $image = db_get('images', unserialize($work['images'])[0]);
        $works[$key]['image'] = $image;
    }

    tpl_include('works/index', [
        'title' => 'Работы',
        'page' => 'works',
        'works' => $works
    ]);
}

function works_detail(int $id): void
{
    $work = db_get('works', $id);
    if(!$work) not_found();

    $images = db_get_multiple('images', unserialize($work['images']));

    tpl_include('works/detail', [
        'title' => sprintf('Работа «%s»', $work['title']),
        'page' => 'works',
        'work' => $work,
        'images' => $images
    ]);
}