<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../utils/Class/Db.php";
$searchTerm = $_GET["searchValue"];



    $db = new Db("127.0.0.1", "root", "ipod", "");
    $sql = "SELECT * FROM newsposts_homepage WHERE paragraphes LIKE '%$searchTerm%'
            OR header LIKE '%$searchTerm%'
            OR title LIKE '%$searchTerm%'";

    $datas["news"] = $db->getData($sql);


    $sql = "SELECT * FROM team WHERE bio LIKE '%$searchTerm%'
    OR firstname LIKE '%$searchTerm%'
    OR lastname LIKE '%$searchTerm%'";

    $datas["team"] = $db->getData($sql);
    
    $answerDatas = json_encode($datas);
    echo $answerDatas;
    



