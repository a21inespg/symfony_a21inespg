<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'api_songs_get_one' => [['id'], ['_controller' => 'App\\Controller\\SongController::getSong'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/api/songs']], [], [], []],
    'app_homepage' => [[], ['_controller' => 'App\\Controller\\VinylController::homepage'], [], [['text', '/']], [], [], []],
    'app_browse' => [['slug'], ['slug' => null, '_controller' => 'App\\Controller\\VinylController::browse'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/browse']], [], [], []],
];
