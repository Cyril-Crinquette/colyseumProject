<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query(
        'SELECT `id`, `lastName`, `firstName`, DATE_FORMAT(`birthDate`,"%d-%m-%Y"), `cardNumber`, `card`,
        IF(`cards`.`cardsTypesId` = 1, "oui", "non") as fidelity, 
        IF(`cards`.`cardsTypesId` = 1, `clients`.`cardNumber`,"") as numberCard,
        FROM `clients`
        LEFT JOIN `cards`
        ON `client`.`cardNumber` = `cards`.`cardNumber`
        '
        );
    $customers = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice7.php');
include(dirname(__FILE__).'/../views/templates/footer.php');