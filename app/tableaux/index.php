<?php
echo "index de 'tableaux'";
echo '<br/><br/><br/>';

// tableaux indéxés

$tablo01 = [];
// $tablo01 = array (); <- declaration dessuète

// $tablo02 = [true, 4, 5.8, [5, 'client', ['user', 8.9, 8]]];  écrite espacée ci-dessous équivalente
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
echo '<br/><br/><br/>';
//--------------------------------------------------------------------------------

$tablo03 = [];
$tablo03 = 'janvier';
$tablo03 = 45;
$tablo03 = false;
echo "<pre>";
var_dump($tablo03);
echo '<br/>';
// ceci ne définit qu'une seule cellule, qu'on réaffecte à chaque fois...

$tablo03 = []; //...ceci marche
$tablo03[] = 'janvier';
$tablo03[] = 45;
$tablo03[] = false;
echo "<pre>";
var_dump($tablo03);
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

$planets = ['mars', 'terre', 'uranus', 'venus', 'jupiter'];
print_r($planets); echo '<br/>';
sort($planets);
print_r($planets); echo '<br/>';



?>