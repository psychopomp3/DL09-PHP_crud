<?php require '../fonctions/debug-dd.php';?>
<?php require '../villes.php';?>
<?php echo "index de 'Boucles-Tableaux'";
echo '<br/><br/><br/>';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>
    
    <?php

        $jsonListEmployees = file_get_contents('../data/employees.json');
        // dd($jsonListEmployees);
        $jsonListEmployeesArray = json_decode($jsonListEmployees, true);
        // dd($jsonListEmployeesArray);

        // foreach($array as $key => $value):
        foreach($jsonListEmployeesArray['data'] as $key => $val):
           echo "<ul>";
                echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_name'] . '</li>';
                echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_salary'] . '</li>';
                echo '<li>' . $jsonListEmployeesArray['data'][$key]['employee_age'] . '</li>';
            echo "</ul>";
        endforeach;
echo '<br/><br/>';

          /* echo "<ul>";
                echo '<li>' . $val['employe_name'] .'</li>';
                echo '<li>' . $val['employe_salary'] .'</li>';
                echo '<li>' . $val['employe_age'] .'</li>';
            echo "</ul>"
        endforeach;*/
echo '<br/><br/><br/>';

/*function filterByName($villes, $nom) {
    $filterVilles = [];
    foreach ($villes as $ville) {
        if ($ville['nom'] === $nom):
            $filterVilles[] = $ville;
        endif;
    }
    return $filterVilles;
}




<ul>
    <?php foreach(filterByName($villes, 'Paris') as $ville): ?>
        <li><a href="<?=$ville['siteweb']?>"> <?=$ville['nom']?></a></li>
    <?php endforeach; ?>
</ul>
*/

?>
</body>
</html>
