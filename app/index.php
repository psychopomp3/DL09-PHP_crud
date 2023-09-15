
<h1>titre H1 en html</h1>

<?php

//variables
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


// tableau

$tableau = ['Groupe Scolaire',34,5.78,false,[1,2,3]];
// echo $tableau; <--fausse syntaxe
echo "<pre>";
// print_r($tableau); ou:
var_dump($tableau);
echo "</pre>";
echo "</pre>";
die();
?>








