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

//------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------

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
echo calcul2(9.56,3.72);
echo '<br/><br/>';

/* function calcul3(int $a, int $b): int 
{
    $c = $a + $b;
    return $c;
}
echo calcul3("10",12);
echo '<br/><br/>'; */

function calcul4(int $a, int $b = 5): int // <-on peut proposer une valeur par défaut
{
    return $a + $b;
}
echo calcul4(10);
echo '<br/><br/>';

//------------------------------------------------------------------------------------

// Exo: Faire une fonction qui calcule le prix TTC en lui passant le prix HT et la TVA

function prixTTC($prixHT, $TVA) {
    $prixHT += $prixHT * $TVA / 100;
    return $prixHT;
}
/* ou avec les types:
function prixTTC(float $prixHT, int $TVA): float
{
    $prixHT += $prixHT * $TVA / 100;
    return $prixHT;
}*/
echo 'Le prix TTC est de ' . prixTTC(34, 10) . '€';
echo '<br/><br/>';

// Exo: Faire une fonction qui calcule l'age d'une personne avec son année de naissance

function Age($birthyear) {
    return date("Y") - $birthyear;
}
echo 'L\'âge est ' . Age(1776) . ' ans.';
echo '<br/><br/><br/>';

//------------------------------------------------------------------------------------

function monVide() : void
{
    return ;
}

// fonctions internes à PHP:
 

$article = "Je lis un article.";
/* inverser une chaine de caractères:
 string reverse : strrev() */
 /* longueur d'une chaine de caractères:
 string length : strlen() */
/* met en majuscule une chaine de caractères:
 string to upper : strtoupper() */
 /* remplace un élément dans une chaine de caractères:
 string replace : str_replace() */
  /* remplace un segment dans une chaine de caractères:
 substract string : substr() */

// Exo: remplacer 'un' par 'cet', renvoyer les 6 premiers éléments de la chaine
echo $article; echo '<br/>';
echo strrev($article); echo '<br/>';
echo strtoupper($article); echo '<br/>';
echo strlen($article); echo '<br/>';
echo str_replace('un', 'cet', $article); echo '<br/>';
echo substr($article, 0, 6); echo '<br/>';
echo '<br/><br/><br/>';

//------------------------------------------------------------------------------------

$x = 5;
$y = 3;
function nucalcul(int $x): int
{
    global $y;
    $y = 7;
    return $x + $y;
}
echo nucalcul(5); echo '<br/>';
echo $y; echo '<br/>';
// dd($y);
echo '<br/><br/>';

global $z;
$z = 'Le Monde';
echo "Hello " . $GLOBALS['z'];


?>