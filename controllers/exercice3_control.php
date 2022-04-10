<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query('SELECT * FROM `clients` LIMIT 20');
    $customers = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice3.php');
include(dirname(__FILE__).'/../views/templates/footer.php');