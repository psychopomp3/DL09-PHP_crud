<?php

echo "<ul>";
foreach($articles as $article):
    echo '<li><a href="show.php?id=' . $article['id'] . '">Titre : ' . $article['titre'] . '</a></li>';
    endforeach;
echo "</ul>";

$connexion = null;

?>