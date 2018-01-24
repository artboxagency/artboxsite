<?php

require_once "../Autoloader.php";
$dir = '../../../content/drivingforce';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");

// Kill db
emptyDrivingForceTable($db);

foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $drivingLocale = getContentsBetween($content, '#locale', '#/locale');
        $drivingFirstName = getContentsBetween($content, '#firstname', '#/firstname');
        $drivingLastName = getContentsBetween($content, '#lastname', '#/lastname');
        $drivingSceneName = getContentsBetween($content, '#sceneName', '#/sceneName');
        $drivingCity = getContentsBetween($content, '#city', '#/city');
        $drivingDomain = getContentsBetween($content, '#domain', '#/domain');
        $drivingImageUrl = getContentsBetween($content, '#imageUrl', '#/imageUrl');
        $drivingEmail = getContentsBetween($content, '#email', '#/email');

        // Prepare datas from Query
        if(isset($drivingLocale[0])) {

            $sqlDrivingLocale = str_replace(" ", "", $drivingLocale[0]);

        }

        if(isset($drivingFirstName[0])) {

            $sqlFirstName = str_replace("'", "%%", $drivingFirstName[0]);

        }

        if(isset($drivingLastName[0])) {

             $sqlLastName = $drivingLastName[0];
        }

        if(isset($drivingSceneName[0])) {

             $sqlSceneName = $drivingSceneName[0];
        }

        if(isset($drivingCity[0])) {
            $sqlCity = $drivingCity[0];
            $sqlCity =  str_replace("'", "%%", $drivingCity);
        }

        if(isset($drivingDomain[0])) {
            $sqlDomain = str_replace("'", "%%", $drivingDomain[0]);
        }

        if(isset($drivingImageUrl[0])) {
            $sqlImageUrl = str_replace("'", "%%", $drivingImageUrl[0]);
        }

        if(isset($drivingEmail[0])) {
            $sqlEmail = str_replace("'", "%%", $drivingEmail[0]);
        }

        $sql = "INSERT INTO dForces(firstname, lastname, scenename, domain, imageUrl, projectId, locale) values('$sqlFirstName', '$sqlLastName', '$sqlSceneName', '$sqlDomain', '$sqlImageUrl', 2, '$sqlDrivingLocale')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyDrivingForceTable($db) {
    $db->queryDb("DELETE FROM drivingForces;");
}
