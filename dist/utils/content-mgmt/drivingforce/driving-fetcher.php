<?php

require_once "../Autoloader.php";
$dir = '../../../content/drivingforce';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "ipod", "");

// Kill db
emptyDrivingForceTable($db);

foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $drivingFirstName = getContentsBetween($content, '#firstname', '#/firstname');
        $drivingLastName = getContentsBetween($content, '#lastname', '#/lastname');
        $drivingSceneName = getContentsBetween($content, '#sceneName', '#/sceneName');
        $drivingCity = getContentsBetween($content, '#city', '#/city');
        $drivingDomain = getContentsBetween($content, '#domain', '#/domain');
        $drivingImageUrl = getContentsBetween($content, '#imageUrl', '#/imageUrl');
        $drivingEmail = getContentsBetween($content, '#email', '#/email');

        // Prepare datas from Query
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
            $sqlImageUrl = str_replace("'", "%%", $drivingDomain[0]);
        }

        if(isset($drivingEmail[0])) {
            $sqlEmail = str_replace("'", "%%", $drivingEmail[0]);
        }

        $sql = "INSERT INTO drivingForces(firstname, lastname, scenename, domain, imageUrl, projectId) values('$sqlFirstName', '$sqlLastName', '$sqlSceneName', '$sqlDomain', '$sqlImageUrl', 2)";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyDrivingForceTable($db) {
    $db->queryDb("DELETE FROM drivingForces;");
}

function getContentsBetween($str, $startDelimiter, $endDelimiter) {
  $contents = array();
  $startDelimiterLength = strlen($startDelimiter);
  $endDelimiterLength = strlen($endDelimiter);
  $startFrom = $contentStart = $contentEnd = 0;
  while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
    $contentStart += $startDelimiterLength;
    $contentEnd = strpos($str, $endDelimiter, $contentStart);
    if (false === $contentEnd) {
      break;
    }
    $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
    $startFrom = $contentEnd + $endDelimiterLength;
  }

  return $contents;
}
