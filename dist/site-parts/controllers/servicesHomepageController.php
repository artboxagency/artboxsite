<?php 
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
// Define last published news

function getServicesAndSubservices($db) {   
    
    $locale = $_SESSION["locale"];
    $sql = "SELECT * from services where locale='$locale'";
    $services = $db->getData($sql);    
    
    return $services;

}

$services = getServicesAndSubservices($db);
