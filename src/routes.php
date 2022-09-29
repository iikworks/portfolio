<?php
use IIKWorks\Portfolio\Controllers\WorksController;
use IIKWorks\Portfolio\Controllers\ContactsController;

return [
    [
        'pattern' => '/',
        'controller' => [WorksController::class, 'index'],
    ], [
        'pattern' => '/work/<id:int>',
        'controller' => [WorksController::class, 'detail'],
    ], [
        'pattern' => '/contacts',
        'controller' => [ContactsController::class, 'contacts'],
    ],
];