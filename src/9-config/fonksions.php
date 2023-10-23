<?php
declare(strict_types=1);

function dbug($value) {
    echo '<pre style="
        background-color: black;
        color: pink;
        padding: 15px;
        overflow: auto;">';
    print_r($value);
    echo '</pre>';
}

function dd($value) {
    dbug($value);
    // die("--la fonction 'die' arrête le script--");
    die("X_X");
}

function view(string $name, string | array $model) {
    return require '9-views/layout.view.php';
}

function cleanData($value){
    return trim(filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
}

?>