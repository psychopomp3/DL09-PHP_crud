<?php
declare(strict_types=1);
echo "index de 'fonctions'";
echo '<br/><br/><br/>';


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
    die("fonction qui arrête le script");
}

function calcul1($a,$b) {
    $c = $a + $b;
    echo $c;
}
calcul1(10,12);
echo '<br/><br/>';

function calcul2($a,$b) {
    $c = $a + $b;
    return $c;
}
echo calcul2(9.5,5.7);
echo '<br/><br/>';

function calcul3(int $a, int $b): int 
{
    $c = $a + $b;
    return $c;
}
echo calcul3("10",12);
echo '<br/><br/>';




?>