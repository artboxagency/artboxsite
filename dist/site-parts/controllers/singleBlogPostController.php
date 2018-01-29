<?php 
require "../utils/Class/Db.php";

if(isset($_GET)) {

    if(isset($_GET["article"])) {
        $singlePostId = $_GET["article"];
        
        // Call the function to get the datas 
    }    
}
function getSinglePost($postId) {   
 
    $db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
    $sql = "SELECT * from newsposts_homepage where id = $postId";
    $blogPost = $db->getData($sql);
    
    $toView = array();
    // Change the character that where changed to fit in the db
    foreach($blogPost as $key => $fields)  {
        foreach($fields as $x => $field) {
            $toView[$x] = str_replace("%%","'", $field);
        }
    }

    return $toView;

}



    