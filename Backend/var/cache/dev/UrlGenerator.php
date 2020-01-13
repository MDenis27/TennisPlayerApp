<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception::showAction'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception::cssAction'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'add_personapi' => [[], ['_controller' => 'App\\Controller\\APIAddPersonController::index'], [], [['text', '/api/addperson']], [], []],
    'add_racketapi' => [[], ['_controller' => 'App\\Controller\\APIAddRacketController::index'], [], [['text', '/api/addracket']], [], []],
    'racketDeleteapi' => [['id'], ['_controller' => 'App\\Controller\\APIAddRacketController::deleteRacket'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/addracket/delete']], [], []],
    'api_create_string' => [[], ['_controller' => 'App\\Controller\\APIAddStringController::index'], [], [['text', '/api/addstring']], [], []],
    'stringDeleteapi' => [['id'], ['_controller' => 'App\\Controller\\APIAddStringController::deleteString'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/addstring/delete']], [], []],
    'homeapi' => [[], ['_controller' => 'App\\Controller\\APIHomeController::index'], [], [['text', '/api']], [], []],
    'homePersonapi' => [['id'], ['_controller' => 'App\\Controller\\APIHomeController::displayPerson'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/delete']], [], []],
    'loginapi' => [[], ['_controller' => 'App\\Controller\\APILoginController::index'], [], [['text', '/api/login']], [], []],
    'add_person' => [[], ['_controller' => 'App\\Controller\\AddPersonController::new'], [], [['text', '/addperson']], [], []],
    'add_racket' => [[], ['_controller' => 'App\\Controller\\AddRacketController::new'], [], [['text', '/addracket']], [], []],
    'add_string' => [[], ['_controller' => 'App\\Controller\\AddStringController::index'], [], [['text', '/addstring']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\LoginController::index'], [], [['text', '/login']], [], []],
];
