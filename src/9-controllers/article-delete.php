<?php

require '9-models/Database.php';

$db = new Database();

$id = $_GET['id'];
$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
    abort();
};

/* $queryArticle = 'SELECT * FROM post WHERE id = :id';
$article = $db->query($queryArticle, [':id' => $id]); */

$queryDelete = 'DELETE FROM post WHERE id = :id';
$articleDelete = $db->query($queryDelete, [':id' => $id]);

if (! $articleDelete) {
    abort();
};

header('Location: /articles');
exit();

?>