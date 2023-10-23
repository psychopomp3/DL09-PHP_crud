
<h2><?= $model['heading']; ?></h2>

<section>
    <form method="POST">
        <label for="titre">Titre : </label>
        <input type="text" name="titre" id="titre"
            <?php
                if (isset($model['titre'])):
                    echo 'value="' . $model['titre'] . '"';
                endif;
            ?>
        >

        <label for="contenu">Recette : </label>
        <textarea name="contenu" id="contenu" cols="30" rows="10">
            <?php
                if (isset($model['contenu'])):
                    $model['contenu'];
                endif;
            ?>
        </textarea>

        <input type="submit" value="Ajouter">
    </form>

    <p>
        <?php
            if (isset($model['errors']) && !empty($model['errors'])):
                foreach ($model['errors'] as $error):

                echo '<p class="error">' . $error . '</p>';

                endforeach;
            endif;
        ?>
    </p>
</section>
