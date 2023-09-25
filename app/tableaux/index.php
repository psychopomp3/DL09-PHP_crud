<?php
echo "index de 'tableaux'";
echo '<br/><br/><br/>';

// tableaux indéxés

$tablo01 = [];
// $tablo01 = array (); <- declaration obsolète

// $tablo02 = [true, 4, 5.8, [5, 'client', ['user', 8.9, 8]]];  = écriture espacée ci-dessous équivalente
$tablo02 = [
    true,
    4,
    5.8,
    [
        5,
        'client',
        [
            'user',
            8.9,
            8
        ]
    ]
];
echo "<pre>";
var_dump($tablo02);
echo "</pre>";
echo '<br/><br/><br/>';
//--------------------------------------------------------------------------------

$tablo03 = [];
$tablo03 = 'janvier';
$tablo03 = 45;
$tablo03 = false;
echo "<pre>";
var_dump($tablo03);
echo "</pre>";
echo '<br/>';
// ceci ne définit qu'une seule cellule, qu'on réaffecte à chaque fois...

$tablo03 = []; //...ceci marche
$tablo03[] = 'janvier';
$tablo03[] = 45;
$tablo03[] = false;
echo "<pre>";
var_dump($tablo03);
echo "</pre>";
echo '<br/>'; // ou bien ...

// ...pour remplir les cellules les unes à la suite des autres :
$tablo04 = [];
array_push($tablo04, 'janvier', 45, false);
echo "<pre>";
var_dump($tablo04);
echo '<br/>';

$notes = [12, 14, 8, 10];

$tabloFusion = array_merge($tablo04, $notes);
echo "<pre>";
var_dump($tabloFusion);
echo "</pre>";
echo '<br/>';

// les index : accéder aux élements du tableau -----------------------------------

var_dump($notes[1]); // afficher la 2ème cellule du tableau 'notes'
var_dump($tabloFusion[4]);
print_r($tabloFusion[4]); echo '<br/>';
print_r($tabloFusion[0]); echo '<br/>';
print_r($tablo02[3][1]); echo '<br/>'; //afficher 'client' du tableau 2
print_r($tablo02[3][2][2]); //afficher '8' du tableau 2
echo '<br/><br/><br/>';

// tableau associatif ------------------------------------------------------------
$fruits = [
    'banane' => 'jaune',
    'pomme' => 'rouge',
    'kiwi' => 'vert'    
];

$fruits['cassis'] = 'violet';
$fruits['framboise'] = 'rose';
print_r($fruits);
echo '<br/>';

print_r($fruits['kiwi']); // afficher la couleur du kiwi (notion de 'clé' et 'valeur')
echo '<br/>';

$chaine = implode('¤', $fruits); //afficher les VALEURS de chaque cellule dans une seule chaine de charactère avec le séparateur choisit '¤'
print_r($chaine);
echo '<br/>';
// à l'inverse 'explode' prend les mots d'une chaine de charactère et les places en valeurs d'un nouveau tableau
$fruits2 = explode('¤', $chaine);
print_r($fruits2);
echo '<br/><br/><br/>';

// $planets = ['mars', 'terre', 'uranus', 'venus', 'jupiter'];
$planets = [
    'm' => 'mars',
    't' => 'terre',
    'u' => 'uranus',
    'v' => 'venus',
    'j' => 'jupiter'
];
print_r($planets); echo '<br/>';
sort($planets); // classement des valeurs
print_r($planets); echo '<br/>';
rsort($planets); // reverse sort, classement à l'envers
print_r($planets); echo '<br/>';

// asort, ksort, arsort, krsort ...à tester...
echo '<br/><br/><br/>';


$lettres = [];
$lettres[] = ['A', 'B', 'C'];
$lettres[] = ['Q', 'R', 'T'];
$lettres[] = ['E', 'U', 'P', 'I'];
print_r($lettres);
echo '<br/>';
//afficher le mot 'ceppic'
print_r($lettres[0][2] . $lettres[2][0] . $lettres[2][2] . $lettres[2][2] . $lettres[2][3] . $lettres[0][2]);
echo '<br/><br/><br/>';


$person1 = [
    'nom' => 'Carle',
    'prenom' => 'Awa',
    'email' => 'cawa@yahoo.com'
];
$people = [
    $person1,
    [
        'nom' => 'Mourad',
        'prenom' => 'Michel',
        'email' => 'moumi@caramail.com'   
    ],
    [
        'nom' => 'Dupond',
        'prenom' => 'Lucie',
        'email' => 'ludu@gmail.com'   
    ]
];
print_r($people);

/* Afficher les phrases :
'Le nom de Lucie est Dupond'
'L'email de Mourad est mouni@caramail.com' */

print_r('Le nom de ' . $people[2]['prenom'] . ' est ' . $people[2]['nom'] . '.');
echo '<br/>';
print_r('L\'email de M. ' . $people[1]['nom'] . ' est ' . $people[1]['email'] . '.');
echo '<br/>';

$jsonfile = json_encode($people); // transforme un tableau en fichier json
print_r($jsonfile);

$jsonPerson = '{
    "nom" : "Pont",
    "prenom" : "Albert",
    "email" : "ponal@yahoo.fr",
    "couleur" : ["rouge", "vert", "jaune"],
    "image" : "http://ximg.es/128x128/000/fff"
}';

$jsonPersonArray = json_decode($jsonPerson, true); // transforme un fichier json en tableau
print_r($jsonPersonArray);
?>

<figure>
    <img src="<?=$jsonPersonArray['image']?>">
    <figcaption>
        <ul>
            <li><?=$jsonPersonArray['prenom']?> <?=$jsonPersonArray['nom']?></li>
            <li><?=$jsonPersonArray['email']?></li>
        </ul>
    </figcaption>
</figure>