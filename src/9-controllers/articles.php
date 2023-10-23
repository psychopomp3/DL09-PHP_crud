<?php

// include './4-fonctions/debug-dd.php';
require './9-models/Database.php';

$db = new Database();
// $articles = $db->query('SELECT * FROM post')->fetchAll(PDO::FETCH_ASSOC);
$articles = $db->query('SELECT * FROM post')->findAll();



$heading = 'Liste de recettes:';

include './9-views/articles.view.php';


?>