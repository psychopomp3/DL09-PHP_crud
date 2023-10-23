<?php

require '9-models/Database.php';
$db = new Database;
$heading = 'Création d\'une nouvelle recette';


if($_SERVER['REQUEST_METHOD'] === 'POST'):
    // dbug($_POST);
    $titre = filter_var($_POST['titre'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $contenu = filter_var($_POST['contenu'],
    FILTER_SANITIZE_FULL_SPECIAL_CHARS);

/*     dbug($titre);
    dbug($contenu); */

    $db->query('INSERT INTO post(titre, contenu) VALUES (:titre,:contenu)' , [
        'titre' => $titre,
        'contenu' => $contenu
    ]
    );

    header('Location: /articles');
    exit();

endif;

view('article-new', $heading);

?>