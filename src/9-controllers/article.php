<?php
// include '../9-config/fonksions.php';
require '9-models/Database.php';
// require '../9-core/rooter.php';

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

if (! $article) {
    // exit("article n'existe pas!");
    abort();
}

view('article',
    [
    'article' => $article
    ]
    );
// include '../9-views/article.view.php';

?>