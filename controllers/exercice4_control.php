<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query(
    'SELECT
    `clients`.`firstName`,
    `clients`.`lastName`,
    `cards`.`cardTypesId`,
    `cards`.`cardNumber`,
    `clients`.`id`,
    `clients`.`birthDate`
    FROM `clients`
    JOIN `cards`
    ON `clients`.`cardNumber` = `cards`.`cardNumber`
    WHERE `cards`.`cardTypesId` = 1'
    );
    $customers = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice4.php');
include(dirname(__FILE__).'/../views/templates/footer.php');