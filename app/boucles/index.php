<?php
echo "index de 'boucles'";
echo '<br/><br/><br/>';

require '../fonctions/index.php';
$planetes = ['mars', 'uranus', 'jupiter', 'terre', 'saturne'];
// dbug($planetes);
// echo '<br/>';
// dd($planetes);
// echo '<br/>';

/*foreach($planetes as $planete) {
    echo "$planete<br/>";
}*/
// syntaxe alternative :
foreach($planetes as $planete):
    echo "$planete<br/>";
endforeach;
echo '<br/>';

foreach($planetes as $key => $planete):
    // echo "$key : $planete<br>";
    // syntaxe alt.:
    echo $key . ' : ' . $planete . '<br/>';
endforeach;
echo '<br/><br/><br/>';

//--------------------------------------------------------------------------

$numbers = [2, 3, 4, 5];
dbug($numbers);
echo '<br/>';

/* foreach($numbers as &$number):
    $number = $number * 3;
    // echo "$number<br/>";
endforeach;
echo '<br/>';
dbug($numbers); */

$i = 0;
foreach($numbers as &$number):
    $number = $number * 3;
    echo "$i : $number<br/>";
    $i++;
endforeach;
echo '<br/><br/><br/>';

//--------------------------------------------------------------------------

$user = [
    'name' => 'Jane Doe',
    'email' => 'janedoe@gmail.com',
    'skills' => ['php', 'javascript', 'python']    
];

/* afficher le tableau de skills 
        tester si $value est un tableau (is_array)
        si oui transformer le tableau en chaine de caractère (implode)
        afficher cette chaine de caractères en tableau (json_encode) */

// ma version #1: 
foreach($user as $key => $value):  
    if(is_array($value)) {
        $chain = implode(', ', $value);
        $jsonUserSkills = json_encode($chain); 
        echo "skills : ";
        print_r($jsonUserSkills);
    } else {
        echo "$key : $value<br/>";
    }
endforeach;
echo '<br/><br/>';

// ma version #2: 
foreach($user as $key => $value):  
    if(is_array($value)) {
        foreach($value as $skill):
            echo "$key : $skill<br/>";
        endforeach;
    } else {
        echo "$key : $value<br/>";
    }
endforeach;
echo '<br/>';

/* version Mehdi: 
foreach($user as $key => $value):  
    echo "$key : ";
    if(is_array($value)) {
        foreach($value as $skill):
            echo "$skill<br/>";
        endforeach;
    } else {
        echo "$value<br/>";
    }
endforeach; */
echo '<br/><br/><br/>';

//--------------------------------------------------------------------------
// boucle "while", utilisée pour incrémentation et calcul...

//--------------------------------------------------------------------------
// boucle "for"

//...ok...

?>