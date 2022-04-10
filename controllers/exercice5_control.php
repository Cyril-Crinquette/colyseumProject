<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query(
        "SELECT id,lastName,firstName 
        FROM clients 
        WHERE lastName 
        LIKE 'M%'
        ORDER BY lastname ASC;
        "       
    );
    $customers = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice5.php');
include(dirname(__FILE__).'/../views/templates/footer.php');