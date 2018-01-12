<?php

require_once "../Autoloader.php";
$dir = '../../../content/team';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "ipod", "");

// Kill db
emptyTeamTable($db);

foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $memberLocale = getContentsBetween($content, "#locale", "#/locale");
        $memberRank = getContentsBetween($content, "#employeeRank", "#/employeeRank");

        $memberFirstName = getContentsBetween($content, '#firstname', '#/firstname');
        $memberLastName = getContentsBetween($content, '#lastname', '#/lastname');
        $memberJobTitle = getContentsBetween($content, '#jobTitle', '#/jobTitle');
        $memberImageUrl = getContentsBetween($content, '#pictureUrl', '#/pictureUrl');
        $memberPhoneNumber = getContentsBetween($content, '#phoneNumber', '#/phoneNumber');
        $memberEmail = getContentsBetween($content, '#email', '#/email');
        $memberBio = getContentsBetween($content, '#bio', '#/bio');

        // Prepare datas from Query
        if(isset($memberLocale[0]))  {

            $sqlLocale = str_replace(" ","",$memberLocale[0]);
        }


        if(isset($memberRank[0]))  {

            $sqlRank = str_replace(" ","",$memberRank[0]);
        }

        if(isset($memberFirstName[0])) {

            $sqlFirstName = str_replace("'", "%%", $memberFirstName[0]);

        }

        if(isset($memberLastName[0])) {

             $sqlLastName = $memberLastName[0];
        }


        if(isset($memberJobTitle[0])) {
            $sqlJobTitle = $memberJobTitle[0];
             $sqlJobTitle =  str_replace("'", "%%", $sqlJobTitle);

        }

        if(isset($memberImageUrl[0])) {
            $sqlImageUrl = str_replace("'", "%%", $memberImageUrl[0]);
        }

        if(isset($memberPhoneNumber[0])) {
            $sqlPhoneNumber =  str_replace("'", "%%", $memberPhoneNumber[0]);
        }

        if(isset($memberEmail[0])) {
            $sqlEmail =  str_replace("'", "%%", $memberEmail[0]);
        }

        if(isset($memberBio[0])) {
            $sqlBio =  str_replace("'", "%%", $memberBio[0]);
        }


        $sql = "INSERT INTO team(firstname, lastname, jobTitle, pictureUrl, phonenumber, email, locale, employeeRank, bio) 
        values('$sqlFirstName', '$sqlLastName', '$sqlJobTitle', '$sqlImageUrl', '$sqlPhoneNumber', '$sqlEmail', '$sqlLocale', $sqlRank, '$sqlBio')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyTeamTable($db) {
    $db->queryDb("DELETE FROM team;");
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
