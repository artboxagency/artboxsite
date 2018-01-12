<?php 
require "../utils/Class/Db.php";

if(isset($_GET)) {

    if(isset($_GET["article"])) {
        $singlePostId = $_GET["article"];
        
        // Call the function to get the datas 
    }    
}
function getSinglePost($postId) {   
 
    $db = new Db("127.0.0.1", "root", "ipod", "");
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



    