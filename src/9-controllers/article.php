<?php
// include '../4-fonctions/debug-dd.php';
require '../Database.php';
// require '../rooter.php';

// dd($_GET);

$db = new Database();

$id = $_GET['id'];
//v1
/* $queryArticle = 'SELECT * FROM post WHERE id =' . $id;
$article = $db->query($queryArticle)->fetch(); */
//v2
$queryArticle = 'SELECT * FROM post WHERE id = :id';
$article = $db->query($queryArticle, [':id' => $id])->find();

// dd($article);

if (! $article){
    exit("article n'existe pas!");
    // abort(401);
}

include '../9-views/article.view.php';

?>