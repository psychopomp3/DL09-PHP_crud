
<?php
include '../3-fonctions/debug-dd.php';
dbug($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaires</title>
</head>
<body>
    <section>
        <h1>page des Formulaires</h1>
        <form action="" method="POST">
            <div>
                <label for="nom">Nom : </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div>
                <label for="email">Email : </label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="titre">Titre : </label>
                <input type="text" name="titre" id="titre">
            </div>
            <div>
                <label for="commentaire">Commentaire : </label>
                <textarea name="commentaire" id="comment" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="competence">Compétence</label>
                <input type="checkbox" name="competence[]" value="php" id="php">PHP
                <input type="checkbox" name="competence[]" value="python" id="python">PYTHON
                <input type="checkbox" name="competence[]" value="html" id="html">HTML
            </div>
            <div>
                <label for="niveau">Niveau : </label>
                <input type="radio" name="niveau" id="debutant" value="debutant">Débutant
                <input type="radio" name="niveau" id="intermediaire" value="intermediaire">Intermédiaire
                <input type="radio" name="niveau" id="expert" value="expert">Expert
            </div>
            <div>
                <input type="submit" value="Envoyer">
            </div>
    
    
        </form>
    </section>


<?php
echo "<hr/>";

echo 'Votre email est : ' . $_POST['email'];

echo "<hr/>";

// boucler sur le tableau $_POST en affichant tous les champs du formulaire dans une liste ul

echo "<ul>";
foreach($_POST as $key => &$val):
    if(is_array($val)) {
        $chaine = implode(', ', $_POST['competence']);
        echo "<li>$key : $chaine</li>";
        } else {
        echo "<li>$key : $val</li>";
    }
endforeach;
echo "</ul>";

echo "<hr/>";
?>
<ul>
<?php foreach($_POST as $key => $val):
    if(is_array($val)) :
        $val = implode(', ', $_POST['competence']);
    endif;
    ?>
    <li><?=$key;?> : <?=$val;?></li>
<?php endforeach ?>
</ul>
<hr/>
</body>
</html>