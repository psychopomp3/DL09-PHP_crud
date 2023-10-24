<?php

require '9-models/Database.php';
$db = new Database;
$heading = 'Modification d\'une recette';
$titre = $contenu = $errors = '';





$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

if (!is_numeric($id)) {
    abort();
}
 
 $queryArticle = 'SELECT * FROM post where id = :id';
 $articleUpdate = $db->query($queryArticle, [':id' => $id])->find();
 
if (! $articleUpdate) {
    abort();
}






if($_SERVER['REQUEST_METHOD'] === 'POST'):


    $errors = [];
    $titre = cleanData($_POST['titre']);
    $contenu = cleanData($_POST['contenu']);

    if ( strlen($titre) === 0):
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
        $db->query('UPDATE post SET titre = :titre, contenu = :contenu WHERE id = :id', 
        [
            'titre' => $titre,
            'contenu' => $contenu
        ]
        );

        header('Location: /articles');
        exit();
    endif;


endif;

view('article-update', [
    'heading' => $heading,
    'titre' => $articleUpdate['titre'],
    'contenu' => $articleUpdate['contenu'],
    'errors' => $errors  
]
);

?>