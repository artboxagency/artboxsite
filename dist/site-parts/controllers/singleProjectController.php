<?php 
require "../utils/Class/Db.php";


if(isset($_GET)) {
    if(isset($_GET["article"])) {
        $singlePostId = $_GET["article"];
        
    }    
}


function getSingleProject($pid) {   
    
    $db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
    $locale = $_SESSION["locale"];
    $sql = "SELECT * from projects where id = $pid";
    $singleProject = $db->getData($sql);    
    
    return $singleProject;

}

