<?php

return [
    'db' => [
        'default' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => '',
            'dbname' => 't4testd4'
        ]
    ],
    'name' => 'Тест фреймворка',

    'extensions' => [
        'jquery' => [],
        'bootstrap' => ['theme' => 'darkly'],
        'ckeditor' => [
            'location' => 'local',
        ],
    ],

    'errors' => [
        404 => '//Errors/404'
    ]
];