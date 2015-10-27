<?php

return [
    '/' => [
        'name' => 'index',
        'callback' => '\Modules\Blog\Controllers\BlogController:index'
    ],
    '/{slug:\w+}' => [
        'name'   => 'view',
        'callback' => '\Modules\Blog\Controllers\BlogController:view'
    ],
];
