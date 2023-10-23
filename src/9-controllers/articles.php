<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>


<!-- Rajout du DL08 PHPmyAdmin-------------------------------------- -->
<?php

// include './4-fonctions/debug-dd.php';
require './9-models/Database.php';

$db = new Database();
// $articles = $db->query('SELECT * FROM post')->fetchAll(PDO::FETCH_ASSOC);
$articles = $db->query('SELECT * FROM post')->findAll();


/*
class Person {
    //attributs
    public $nom;

    //méthodes
    public function courir() {
        echo $this->nom . ' court lentement !';
    }

}

$person1 = new Person();
$person1->nom = 'Robert Mitchum';
// $person1->age = 30;
// dd($person1);
$person1->courir();


try {
    $conXion = new PDO('mysql:host=mariadb;dbname=bloog', 
                        'root', 
                        'root');
    // dd($conXion);
} catch (PDOException $e) {
    exit('Erreur de connexion à la base de données :' . $e);
}

$articles = $conXion->query('SELECT * from post')->fetchAll(PDO::FETCH_ASSOC);
// dd($articles);
*/

$heading = 'Liste de recettes:';

include './9-views/articles.view.php';

// $conXion = null;


?>

</body>
</html>






