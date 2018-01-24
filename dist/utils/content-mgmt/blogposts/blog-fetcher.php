<?php

require_once "../Autoloader.php";
$dir = '../../../content/blogposts';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "ipod", "");


// Kill db
emptyBlogTable($db);


foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $blogTitle = getContentsBetween($content, '#title', '#/title');
        $blogHeader = getContentsBetween($content, '#header', '#/header');
        $blogParagraphes = getContentsBetween($content, '#paragraphe', '#/paragraphe');
        $blogImgSrc = getContentsBetween($content, '#imgsrc', '#/imgsrc');
        $blogAuthor = getContentsBetween($content, '#author', '#/author');
        $blogDate = getContentsBetween($content, '#date', '#/date');

        // Prepare datas from Query
        if(isset($blogTitle[0])) {

            $sqlBlogTitle = str_replace("'", "%%", $blogTitle[0]);

        }

        if(isset($blogHeader[0])) {

            $sqlBlogHeader = $blogHeader[0];
        }


        // Blog paragraphes
        $queryParagraph = "";
        foreach($blogParagraphes as $key => $uniqueParagraphe) {
            $queryParagraph .= "<p>" . $uniqueParagraphe . "</p>";
        }
        $sqlQueryParagraphes = str_replace("'", "%%", $queryParagraph);



        if(isset($blogImgSrc[0])) {
            $src = $blogImgSrc[0];
            $sqlImageSrc =  str_replace("'", "%%", $src);

        }

        if(isset($blogAuthor[0])) {
            $sqlBlogAuthor = str_replace("'", "%%", $blogAuthor[0]);
        }

        if(isset($blogDate[0])) {
            $sqlBlogDate =  str_replace("'", "%%", $blogDate[0]);
        }

        $sql = "INSERT INTO blogposts(title, header, paragraphes, author, date, imgSrc) values('$sqlBlogTitle', '$sqlBlogHeader', '$sqlQueryParagraphes', '$sqlBlogAuthor', '$sqlBlogDate', '$sqlImageSrc')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}

function emptyBlogTable($db) {
    $db->queryDb("DELETE FROM blogposts;");
}

