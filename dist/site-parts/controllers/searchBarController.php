<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../../utils/Class/Db.php";



$searchTerm = $_POST["searchValue"];
function searchBlogPost($searchTerm) {
    $db = new Db("127.0.0.1", "root", "ipod", "");
    
    $sql = "SELECT * FROM newsposts_homepage WHERE paragraphes LIKE '%$searchTerm%'";
    $datas = $db->getData($sql);
    var_dump($datas);
}

searchBlogPost($searchTerm);
