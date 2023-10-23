    <?php

    // dd($model);

    echo '<h2>' . $model['heading'] . '</h2>';

    echo '<section>';
        echo "<ul>";
        foreach($model['articles'] as $article):
            echo '<li><a href="/article?id=' . $article['id'] . '">' . $article['titre'] . '</a></li>';
            endforeach;
        echo "</ul>";
    echo '</section>';

        // $connexion = null;

    ?>

