<?php

use IIKWorks\Portfolio\Controllers\ContactsController;
use IIKWorks\Portfolio\Controllers\WorksController;

$elements = [
    [
        'title' => 'Работы',
        'url' => url_for(WorksController::class, 'index'),
        'page' => 'works'
    ], [
        'title' => 'Контакты',
        'url' => url_for(ContactsController::class, 'contacts'),
        'page' => 'contacts'
    ],
];

if(!isset($is_mobile)) $is_mobile = false;

foreach($elements as $element){
    if($is_mobile) $adding_class = 'block';
    else $adding_class = '';

    if($element['page'] == $page){
        echo '<a href="'.$element['url'].'" class="bg-gray-900 text-white px-3 py-2 '.$adding_class.' rounded-md text-sm font-medium">'.$element['title'].'</a>';
    } else {
        echo '<a href="'.$element['url'].'" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 '.$adding_class.' rounded-md text-sm font-medium">'.$element['title'].'</a>';
    }
}
?>