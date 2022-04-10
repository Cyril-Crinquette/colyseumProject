<?php

require_once(dirname(__FILE__).'/../config/config.php');
require_once(dirname(__FILE__).'/../config/baseConnection.php');

try{
    $sth = $colyseum->query(
        'SELECT title, performer, 
        date, startTime 
        FROM shows 
        ORDER BY title'
    );
    $shows = $sth->fetchAll();
} catch(PDOException $exception){
    $error = $exception->getMessage();
}


include(dirname(__FILE__).'/../views/templates/header.php');
include(dirname(__FILE__).'/../views/user/exercice6.php');
include(dirname(__FILE__).'/../views/templates/footer.php');