<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query('SELECT * FROM clients');
    $customers = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice1.php');
include(dirname(__FILE__).'/../views/templates/footer.php');


// $colyseumBase = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8;port=3306', 'root', '');
//connexion à la base de données sql_colyseum.sql fournit. PDO : PHP DATA OBJECTS
//NEW PDO : PHP DATA OBJECTS https://www.php.net/manual/fr/book.pdo.php

/**
 * Exercice 1 Exécuter le script colyseum.sql fourni avant de commencer.
 * Tous les résultats devront être affichés dans une page index.php.
 * Afficher tous les clients.
 */

//Requête SQL : On selectionne les éléments de la table Clients.
// $request = "SELECT * FROM clients";

//On demande au PDO d'exécuter la requête passée en paramètre.
// $response = $bdd->query($request);

//On récupérer les données clients dans un tableau PHP
// $clients = $response->fetchAll(PDO::FETCH_ASSOC);

// var_dump($clients);

// mdp colyseum_user: tB_P_3r/uKyzKh-  ;


