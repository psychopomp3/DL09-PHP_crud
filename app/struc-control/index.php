<?php
echo "test du index de 'struc-control'";
echo '<br/><br/><br/>';

/*--conditions : if, else, elseif ------------------------------------------------*/

$age = 10;
if($age >= 18) {
    echo "Vous avez le droit de voter";
    echo '<br/>';
} else {
    echo "Vous n'avez pas le droit de voter";
    echo '<br/><br/><br/>';
}

$heure = 23;
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
    echo '<br/><br/><br/>';
}

?>