<?php
include './4-fonctions/debug-dd.php';
require './Database.php';

// dd($_GET);

$db = new Database();

$id = $_GET['id'];
//v1
/* $queryArticle = 'SELECT * FROM post WHERE id =' . $id;
$article = $db->query($queryArticle)->fetch(); */
//v2
$queryArticle = 'SELECT * FROM post WHERE id = :id';
$article = $db->query($queryArticle, [':id' => $id])->fetch();
// dd($article);

include './9-views/show.view.php';

?>