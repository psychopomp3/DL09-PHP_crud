<?php

/* include './4-fonctions/debug-dd.php';
require './Database.php'; */

// dd($_SERVER);


$uriPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$routes = match($uriPath) {
    '/' => './9-controllers/index.php',
    'articles' => './9-controllers/articles.php',
    'contact' => './9-controllers/contact.php',
    default => './9-views/404.php'
};

require($routes);

?>
