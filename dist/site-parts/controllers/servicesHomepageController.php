<?php 
$db = new Db("127.0.0.1", "root", "ipod", "");
// Define last published news

function getServicesAndSubservices($db) {   
    
    $locale = $_SESSION["locale"];
    $sql = "SELECT * from services where locale='$locale'";
    $services = $db->getData($sql);    
    
    return $services;

}

$services = getServicesAndSubservices($db);
