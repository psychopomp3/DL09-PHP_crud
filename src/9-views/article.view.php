<?php include 'partials/header.php'; ?>

<main>
    
    <h3><?=$article['titre']?></h3>
    <p><?=$article['contenu']?></p>
    <p>crée le: <?=$article['create_at']?></p>
    <p><a href="/articles">Retour à la liste des articles</a></p>

</main>

<?php include 'partials/footer.php'; ?>