

<?php include 'partials/header.php'; ?><br/>

<main>
    <h2><?=$heading;?></h2>

    <?php

        echo "<ul>";
        foreach($articles as $article):
            echo '<li><a href="../9-controllers/article.php?id=' . $article['id'] . '">' . $article['titre'] . '</a></li>';
            endforeach;
        echo "</ul>";

        $connexion = null;

    ?>
</main>
