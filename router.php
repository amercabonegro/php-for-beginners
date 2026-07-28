<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/contact' => 'controllers/contact.php',
    '/about' => 'controllers/about.php',
];



function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(404);
    };
}

function abort($code)
{
    http_response_code($code = 404);
    require 'views/404.php';
    die();
}

routeToController($uri, $routes);
