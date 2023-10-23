<?php

    // dd($model);

    echo '<h2>' . $model['heading'] . '</h2>';

    echo '<section>';
        echo "<ul>";
        foreach($model['articles'] as $article):
            echo '<li>' . 
            $article['id'] . 
            ' <a href="/article?id=' . $article['id'] . '">' . $article['titre'] . '</a></li>';
            endforeach;
        echo "</ul>";
        echo '<p><a href="/article-new">Ajouter une nouvelle recette</a></p>';
    echo '</section>';

        // $connexion = null;

?>

