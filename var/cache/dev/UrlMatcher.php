<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/materiel' => [[['_route' => 'materiel_index', '_controller' => 'App\\Controller\\MaterielController::index'], null, ['GET' => 0], null, true, false, null]],
        '/materiel/new' => [[['_route' => 'materiel_new', '_controller' => 'App\\Controller\\MaterielController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/new' => [[['_route' => 'reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/materiel/([^/]++)(?'
                    .'|(*:63)'
                    .'|/edit(*:75)'
                    .'|(*:82)'
                .')'
                .'|/reclamation/(?'
                    .'|([^/]++)(?'
                        .'|(*:117)'
                        .'|/edit(*:130)'
                    .')'
                    .'|reclamation_delete/([^/]++)(*:166)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'materiel_show', '_controller' => 'App\\Controller\\MaterielController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        75 => [[['_route' => 'materiel_edit', '_controller' => 'App\\Controller\\MaterielController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'materiel_delete', '_controller' => 'App\\Controller\\MaterielController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        166 => [
            [['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
