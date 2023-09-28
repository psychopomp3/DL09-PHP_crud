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
    die("");
}

?>