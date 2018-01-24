<?php

require_once "../Autoloader.php";
$dir = '../../../content/services';
//$dir2 = '../../../content/projects/services';
//$fileHomePage = scandir($dir2);

$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");


emptyServicesTable($db);

// Process blogposts
foreach($files as $key => $file) {
    
    
    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);
        $locale = getContentsBetween($content, '#locale','#/locale');
        $locale = str_replace(' ', '',$locale);




        // Get article parts
        $serviceTitle = getContentsBetween($content, '#serviceTitle', '#/serviceTitle');
        $serviceSid = getContentsBetween($content, '#sid', '#/sid');
        $subServices = getContentsBetween($content, '#subservices', '#/subservices');
        
        // Prepare datas from Query
        if(isset($serviceSid[0])) {
            
            $serviceSid = str_replace("'", "%%", $serviceSid[0]);
            $serviceSid = str_replace("s","",$serviceSid);
            $serviceSid = str_replace(" ","",$serviceSid);
            $serviceSid = intval($serviceSid);
            if(is_int($serviceSid)){ 
                
                
            }
        }

        // Prepare datas from Query
        if(isset($serviceTitle[0])) {
            $sqlServiceTitle = str_replace("'", "%%", $serviceTitle[0]);
        }

        if(isset($subServices)) {
            $sqlSubServices = "";
            foreach($subServices as $key => $uniqueSubService) {
                $sqlSubServices .= $uniqueSubService . "%";
            }
        }
                
        $now = time();
        
        
        $sql = "INSERT INTO services(sid, name, subgenres, locale) values ($serviceSid, '$sqlServiceTitle', '$sqlSubServices', '$locale[0]')";
        

        //$sql = "INSERT INTO team(firstname) VALUES ('penis')";
        $db->queryDb($sql);
    
        // Processing to db for blog
        
    }
}


// Process blogposts
function emptyServicesTable($db) {
    $db->queryDb("DELETE FROM services;");
}

