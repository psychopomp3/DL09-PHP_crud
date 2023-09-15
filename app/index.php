<h1>Exercices de Syntaxe de base en PHP</h1>

<?php

// Variables -----------------------------------------------------

$variable = 'une variable';
$VariaBle = 'une autre variable';
echo $variable;
echo '<br>';
echo $VariaBle;
echo '<br>';
//$nb = (int) '5.6';
echo '<br>';
//printf($nb);
//echo '<h2>titre2</h2>';
//$nb = (bool) 'true';

/*
$camelCase = 'une variable avec 1ère lettre en MAJ puis min';
$snake_case = 'variable avec _';
$kebab-case = 'variable avec -';
$PascalCase = 'Majuscule à chaque mot';
*/
$fruit1 = 'pomme';
$fruit2 = 'banane';

echo "$fruit1" . " (espaces) " . "$fruit2";
echo '<br/>';
echo "$fruit1" . " <br/> " . "$fruit2";
echo '<br/><br/><br/>';

$resultat = '';
$resultat .= 'le fruit choisi est :';
$resultat .= '<h2>';
$resultat .= ' la banane!';
$resultat .= '</h2>';
echo $resultat;

$titre = "Les Fruits";

?>


<h2><?php echo $titre ?></h2>
<!-- autre écriture :-->
<h2><?= $titre ?></h2> 

<?php
$data1 = "Hello";
$data2 = "planète";
$data3 = "Mars";
$data4 = "les terriens";

// echo "$data1" . ", " . "$data4" . ". Je viens de la " . "$data2" . " " . "$data3" . ".";
echo '<br/>';
echo $data1 . ", " . $data4 . ". Je viens de la " . $data2 . " " . $data3 . ".";
echo '<br/>';
echo "$data1, $data4. Je viens de la $data2 $data3.";
echo '<br/>';

$client = 'Jane Doe';
$formation = 'Architecte';
echo "$client suit une formation de $formation";
echo '<br/>';

$html = '';
$html .= $data1;
$html .= ', ';
$html .= $data4;
$html .= '. Je viens de la ';
$html .= $data2;
$html .= ' ';
$html .= $data3;
$html .= '.';

echo $html;
echo '<br/><br/><br/>';


// Tableaux ----------------------------------------------------------

$tableau = ['Groupe Scolaire',34,5.78,false,[1,2,3]];
// echo $tableau; <-fausse syntaxe!
echo "<pre>";
// print_r($tableau); ou:
var_dump($tableau);
echo "</pre>";
echo '<br/><br/><br/>';


// Constantes --------------------------------------------------------

define('USER', 'John Doe');
echo USER;
echo '<br/>';
define('TABLEAU', ['client', 4, true, 4.8]);
var_dump(TABLEAU);
echo '<br/><br/><br/>';


// Variables Super Globales -------------------------------------------

// var_dump($GLOBALS);
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
echo '<br/><br/><br/>';


// Opérateurs ---------------------------------------------------------

$x = 4;
$y = 2;
$z = 5;

/* + - * / ** % */

// $calcul = $x + $y;
// $calcul = $x - $y;
// $calcul = $x * $y;
// $calcul = $x / $y;
// $calcul = $x ** $y;
$calcul = $x % $z; //modulo=reste de la division
echo $calcul;
echo '<br/>';

$a = 5;
$b = 7;
// $a += .72; // $a = $a + 0.72;
$a **= 6; // $a = $a ** 6; (5 puissance 6);

echo $a; //=5.72
echo '<br/><br/><br/>';

// EXO: ----------------------------------------------------------------
// Créer 2 variables prixHT et TVA
// Afficher le calcul du prix TTC
$prixHT = 34;
$TVA = 10;
// méthode 1:
// $prixTTC = $prixHT * (1 + $TVA/ 100);
// echo "Le prix TTC est de $prixTTC €";
//méthode 2:
echo '<br/>';
$prixHT += $prixHT * $TVA / 100;
echo "Le prix TTC est de $prixHT €";
echo '<br/><br/>';

// Calculer l'âge d'une personne en fonction de son année de naissance
// en utilisant la fonction 'date'

$birthyear = '1979';
$age = date("Y") - $birthyear;
echo $age;



?>








