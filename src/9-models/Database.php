<?php

class Database {
    //attributs
    public $connexion;
    public $statement;

    //méthodes

    public function __construct() {
        try {
            $this->connexion = new PDO('mysql:host=mariadb;dbname=blog', 
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
        $this->statement = $this->connexion->prepare($query);
        $this->statement->execute($param);
        return $this;
    }

    public function find() {
        return $this->statement->fetch();
    }

    public function findAll() {
        return $this->statement->fetchAll();
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