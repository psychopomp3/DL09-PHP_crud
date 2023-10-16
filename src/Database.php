<?php

class Database {
    //attributs
    public $connexion;

    //méthodes

    public function __construct() {
        try {
            $this->connexion = new PDO('mysql:host=mariadb;dbname=bloog', 
                                        'root', 'root', 
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
            // echo "connexion OK";
        } catch (PDOException $e) {
            exit('Erreur de connexion à la base de données :' . $e);
        }

    }
//v1
    /* public function query($query) {
        $statement = $this->connexion->prepare($query);
        $statement->execute();
        return $statement;
    } */
//v2
    public function query($query, $param =[]) {
        $statement = $this->connexion->prepare($query);
        $statement->execute($param);
        return $statement;
    }

}

/* try {
    $conXion = new PDO('mysql:host=mariadb;dbname=bloog', 
                        'root', 
                        'root');
} catch (PDOException $e) {
    exit('Erreur de connexion à la base de données :' . $e);
} */

// $articles = $connexion->query('SELECT * from post')->fetchAll(PDO::FETCH_ASSOC);

?>