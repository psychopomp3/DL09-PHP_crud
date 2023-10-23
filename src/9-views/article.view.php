    <h3><?=$model['article']['titre']?></h3>
    <p><?=$model['article']['contenu']?></p>
    <p>publié le: <?=$model['article']['created_at']?></p>

    <p>
        <a href="/article-delete?id=<?=$model['article']['id']?>" 
            onClick="return confirm('êtes-vous certain de vouloir supprimer cet article?')">
            Supprimer cet article
        </a>
    </p>

    <p><a href="/articles">Retour à la liste des articles</a></p>

