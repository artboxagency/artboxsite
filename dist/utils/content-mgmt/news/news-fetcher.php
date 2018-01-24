<?php

require_once "../Autoloader.php";
$dir = '../../../content/news';
$dir2 = '../../../content/news/homepage';
$files = scandir($dir);
$fileHomePage = scandir($dir2);
$db = new Db("127.0.0.1", "root", "ipod", "");


// Kill db
emptyNewsTable($db);

// Process blogposts
foreach($fileHomePage as $key => $file) {

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
        $thumbnailTitle = getContentsBetween($content, '#thumbnailTitle', '#/thumbnailTitle');

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

        if(isset($thumbnailTitle[0])) {
            $sqlTitleThumbnail =  str_replace("'", "%%", $thumbnailTitle[0]);
        }


        $now = time();
        $sql = "INSERT INTO newsposts_homepage(title, header, paragraphes, imgsrc, author, date, publishedTimeStamp, thumbnailTitle) values
        ('$sqlTitle', '$sqlHeader', '$sqlQueryParagraphes', '$sqlImageSrc', '$sqlAuthor', '$sqlDate', '$now', '$sqlTitleThumbnail')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}


// Process blogposts
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
        $now = time();
        $sql = "INSERT INTO newsposts(title, header, paragraphes, imgsrc, author, date, publishedTimeStamp) values
        ('$sqlTitle', '$sqlHeader', '$sqlQueryParagraphes', '$sqlImageSrc', '$sqlAuthor', '$sqlDate', '$now')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyNewsTable($db) {
    $db->queryDb("DELETE FROM newsposts;");
}

