<?php 
require "../utils/Class/Db.php";



if(isset($_GET)) {
    if(isset($_GET["article"])) {
        $singlePostId = $_GET["article"];
        
    }    
}


function getSingleTeamMember($teamMemberId) {   
    
    $db = new Db("127.0.0.1", "root", "ipod", "");
    $locale = $_SESSION["locale"];
    $sql = "SELECT * from team where id = $teamMemberId";
    $teamMember = $db->getData($sql);    
    

    return $teamMember;

}

