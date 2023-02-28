<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_homepage', '_controller' => 'App\\Controller\\VinylController::homepage'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/songs/(\\d+)(*:23)'
                .'|/browse(?:/([^/]++))?(*:51)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        23 => [[['_route' => 'api_songs_get_one', '_controller' => 'App\\Controller\\SongController::getSong'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [
            [['_route' => 'app_browse', 'slug' => null, '_controller' => 'App\\Controller\\VinylController::browse'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
