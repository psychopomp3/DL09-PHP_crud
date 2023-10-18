<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h3><?=$article['titre']?></h3>
    <p><?=$article['contenu']?></p>
    <p>crée le: <?=$article['create_at']?></p>
    <p><a href="/articles">Retour à la liste des articles</a></p>

</body>
</html>