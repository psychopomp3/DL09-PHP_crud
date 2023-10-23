<?php

//include './9-config/debug-dd.php';
// require './9-models/Database.php';

// dd($_SERVER);


$uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

/* $routes = match($uriPath) {
    '/' => './9-controllers/index.php',
    '/articles' => './9-controllers/articles.php',
    '/article' => './9-controllers/article.php',
    '/contact' => './9-controllers/contact.php',
    default => './9-views/404.php'
};

require($routes); */

// require 'routes.php';

$routes = require('./9-config/routes.php');

function routeToController($uri, $routes){
    if (array_key_exists($uri, $routes)):
        require $routes[$uri];
    else:
        abort();
    endif;
}

function abort($code = 404){
    http_response_code($code);
    require "9-views/$code.php";
    die();
}

routeToController($uriPath, $routes);

?>
