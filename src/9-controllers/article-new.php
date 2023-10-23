<?php

require '9-models/Database.php';
$db = new Database;
$heading = 'Création d\'une nouvelle recette';
$titre = $contenu = $errors = '';


if($_SERVER['REQUEST_METHOD'] === 'POST'):

    // dbug($_POST);

    $errors = [];
    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);

    if ( strlen($titre) === 0):
        // echo 'champ \'titre\' ou \'contenu\' vide!';
        $errors[] = 'champ \'titre\' vide!';
    endif;

    if ( strlen($titre) >= 50):
        $errors[] = 'votre \'titre\' est trop long!';
    endif;

    if ( strlen($contenu) === 0):
        $errors[] = 'champ \'contenu\' vide!';
    endif;

    if ( strlen($contenu) >= 1000):
        $errors[] = 'votre \'contenu\' dépasse les 1000 caractères!';
    endif;

    if (empty($errors)):
        $db->query('INSERT INTO post(titre, contenu) VALUES (:titre,:contenu)' , [
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );

        header('Location: /articles');
        exit();
    endif;


endif;

view('article-new', [
    'heading' => $heading,
    'titre' => $titre,
    'contenu' => $contenu,
    'errors' => $errors  
]
);

?>