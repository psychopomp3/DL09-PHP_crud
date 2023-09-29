<?php
echo "test du index de 'struc-control'";
echo '<br/><br/><br/>';

/*--conditions : if, else, elseif ------------------------------------------------*/
echo "---boucles 'IF'---<br/><br/>";
$age = 10;
if($age >= 18) {
    echo "Vous avez le droit de voter";
    echo '<br/>';
} else {
    echo "Vous n'avez pas le droit de voter";
    echo '<br/><br/>';
}

// $heure = 23;
$heure = date("H");
/* afficher 'on est le matin' lorsque l'heure est inférieure à 12h
 et 'on est le soir' lorsque l'heure est supérieure à 18h*/
if($heure < 12) {
    echo "On est le matin";
    echo '<br/>';
} elseif($heure >= 18) {
    echo "On est le soir";
    echo '<br/>';
} else {
    echo "On est l'après-midi";
    echo '<br/>';
}
echo '<br/><br/><br/>';

/*--Comparateurs ------------------------------------------------*/
echo "---Comparateurs---<br/><br/>";
/* != : est différent de */
/* == : comparaison d'égalité en valeur */
/* === : comparaison d'égalité en TYPE de variable ET valeur */ 
$a = '20';
$b = 5;
if($b != 3) {
    echo "La variable $b n'est pas égale à 3 (<-erreur d'affichage)";
    echo '<br/>';
    echo 'La variable $b n\'est pas égale à 3';
    echo '<br/>';
}

if($b === '5') {
    echo "égalité en type ET valeur";
} else {
    echo "mauvais type de variable";
}

// if a une syntaxe simplifiée pour les conditions booléenes (true, false, null):
echo '<br/><br/><br/>';
echo "---boucles 'IF' syntaxe simplifiée pour booléens---<br/><br/>";
$vrai = true;
if($vrai) {
    echo "affichons 'vrai'";
} else {
    echo "affichons 'faux'";
}


// condition ternaire --------------------------------------------------------
echo '<br/><br/><br/>';
echo "---Conditions ternaires---<br/><br/>";
$votes = 7540;
$votesPrecedents = 1254;
// si $votes est sup à $votesPrecedents, décrémente $votes, sinon incrémente $votes :
($votes > $votesPrecedents) ? $votes-- : $votes++;
echo $votes;
echo '<br/>';

// pour l'exo précédent (cas des booléens) on peut même faire : 
echo ($vrai) ? "affichons 'vrai'" : "affichons 'faux'";
// car il ne s'agit que d'affichage, il n'y a pas de traitement des variables, de type incrémentation
echo '<br/><br/>';

// syntaxe alternative pour booléens et ternaires :
echo "---syntaxe alternative pour booléens et ternaires---<br/>";
$vrai = false;
if($vrai) :
    echo "vré";
else :
    echo "fo";
endif;
echo '<br/>';

if($votes > $votesPrecedents) :
    $votes--;
else :
    $votes++;
endif;
echo $votes;


// switch (vérifier la reconnaissance d'une chaine de charactère)--------------------------------------
echo '<br/><br/><br/>';
echo "---''Switch' : (vérifier la reconnaissance d'une chaine de charactère)---<br/><br/>";
$couleur ='purple';
switch ($couleur) {
    case 'red':
        echo "Votre couleur favorite est le rouge.";
        break;
    case 'blue':
        echo "Votre couleur favorite est le bleu.";
        break;
    case 'green':
        echo "Votre couleur favorite est le vert.";
        break;
    default:
        echo "Votre couleur favorite n'est ni le rouge, ni le bleu, ni le vert.";
}
echo '<br/>';
// version syntaxe alternative :
switch ($couleur):
    case 'red':
        echo "votre fav est le rouj";
        break;
    case 'blue':
        echo "votre fav est le ble";
        break;
    case 'green':
        echo "votre fav est le vair";
        break;
    default:
            echo "votre fav n'est ni le rouj, ni le bloeux, ni le vair";
endswitch;
echo '<br/><br/><br/>';

// match (équivaut à ===, quand switch est une comparaison d'identité de type ==)----
$returnvalue = match($couleur) {
    'red' => 'votre fav matche le rouge',
    'blue' => 'votre fav matche le bleu',
    'green' => 'votre fav matche le vert',
    default => 'ni, ni, ni'
};
echo $returnvalue;


?>