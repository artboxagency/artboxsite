<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "../../utils/Class/Db.php";
require "../../utils/emails/email_methods.php";



$db = new Db("127.0.0.1", "root", "ipod", "");
// Check for form submitting use case
if(isset($_POST["contactForm"])) {
    
    $datas = json_decode($_POST["contactForm"]);
    
    // Process to DB 
    $sql = "Insert into contact(firstname, lastname, email, phoneNumber, age)
    VALUES('$datas->firstname', '$datas->lastname', '$datas->email', '$datas->tel', '$datas->age')";
    $db->queryDb($sql);
    
    
        sendNewContactEmail($datas);
    
    
}



