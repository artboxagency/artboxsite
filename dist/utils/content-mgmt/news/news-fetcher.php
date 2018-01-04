<?php

require_once "../Autoloader.php";
$dir = '../../../content/news';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "ipod", "");


// Kill db
emptyNewsTable($db);


foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $newsTitle = getContentsBetween($content, '#title', '#/title');
        $newsHeader = getContentsBetween($content, '#header', '#/header');
        $newsParagraphes = getContentsBetween($content, '#paragraphe', '#/paragraphe');
        $newsImgSrc = getContentsBetween($content, '#imgsrc', '#/imgsrc');

        $newsAuthor = getContentsBetween($content, '#author', '#/author');
        $newsDate = getContentsBetween($content, '#date', '#/date');

        // Prepare datas from Query
        if(isset($newsTitle[0])) {

            $sqlTitle = str_replace("'", "%%", $newsTitle[0]);

        }

        if(isset($newsHeader[0])) {
            $sqlHeader = str_replace("'", "%%", $newsHeader[0]);

        }


        // Blog paragraphes
        $queryParagraph = "";
        foreach($newsParagraphes as $key => $uniqueParagraphe) {
            $queryParagraph .= "<p>" . $uniqueParagraphe . "</p>";
        }
        $sqlQueryParagraphes = str_replace("'", "%%", $queryParagraph);



        if(isset($newsImgSrc[0])) {
            $src = $newsImgSrc[0];
            $sqlImageSrc =  str_replace("'", "%%", $src);

        }

        if(isset($newsAuthor[0])) {
            $sqlAuthor = str_replace("'", "%%", $newsAuthor[0]);
        }

        if(isset($newsDate[0])) {
            $sqlDate =  str_replace("'", "%%", $newsDate[0]);
        }

        $sql = "INSERT INTO newsposts(title, header, paragraphes, imgsrc, author, date) values
        ('$sqlTitle', '$sqlHeader', '$sqlQueryParagraphes', '$sqlImageSrc', '$sqlAuthor', '$sqlDate')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyNewsTable($db) {
    $db->queryDb("DELETE FROM newsposts;");
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


 ?>
