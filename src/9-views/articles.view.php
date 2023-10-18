<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
    <h1>Site de Recettes de Cuisine</h1>

    <?php include 'partials/header.php'; ?><br/>

    <main>
        <h2><?=$heading;?></h2>
    </main>

    <?php

        echo "<ul>";
        foreach($articles as $article):
            echo '<li><a href="../9-controllers/article.php?id=' . $article['id'] . '">Titre : ' . $article['titre'] . '</a></li>';
            endforeach;
        echo "</ul>";

        $connexion = null;

    ?>

    <br/>
    <?php include 'partials/footer.php'; ?>

</body>
</html>