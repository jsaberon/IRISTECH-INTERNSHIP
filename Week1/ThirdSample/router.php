<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    
    '/' => 'views/index.view.php',
    '/about' => 'controllers/about.php',
    '/contactus' => 'controllers/contactus.php',
];

function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    }
}

function abort($code = 404) {
    http_response_code($code);

    require "views/partial/404.php";

    die();
}

routeToController($uri, $routes);