<?php

require_once "../Autoloader.php";
$dir = '../../../content/projects';
//$dir2 = '../../../content/projects/homepage';
//$fileHomePage = scandir($dir2);
$files = scandir($dir);

$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");


// Kill db
emptyProjectsTable($db);

// Process blogposts
foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        echo "penis";


        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);
        $locale = getContentsBetween($content, '#locale','#/locale');

        $locale = str_replace(array(' '), '',$locale[0]);


        // Get article parts
        $projectTitle = getContentsBetween($content, '#thumbnailTitle', '#/thumbnailTitle');
        $projectThumbnailTitle = getContentsBetween($content, '#thumbnailTitle', '#/thumbnailTitle');
        $projectHeader = getContentsBetween($content, '#headerContent', '#/headerContent');
        $projectBloc1Title = getContentsBetween($content, '#bloc1Title', '#/bloc1Title');
        $projectBloc1Content  = getContentsBetween($content, '#bloc1Content', '#/bloc1Content');

        $projectBloc2Title = getContentsBetween($content, '#bloc2Title', '#/bloc2Title');
        $projectBloc2Content  = getContentsBetween($content, '#bloc2Content', '#/bloc2Content');

        $assets1Url = getContentsBetween($content, '#assets1Url', '#/assets1Url');
        $assets2Url = getContentsBetween($content, '#assets2Url', '#/assets2Url');
        $assets3Url = getContentsBetween($content, '#assets3Url', '#/assets3Url');
        $assets4Url = getContentsBetween($content, '#assets4Url', '#/assets4Url');

        // Prepare datas from Query
        if(isset($projectTitle[0])) {

            $sqlTitle = str_replace("'", "%%", $projectTitle[0]);

        }

        // Prepare datas from Query
        if(isset($projectThumbnailTitle[0])) {
            $sqlThumbnailTitle = str_replace("'", "%%", $projectThumbnailTitle[0]);
        }

        if(isset($projectHeader[0])) {
            $sqlProjectHeader = str_replace("'", "%%", $projectHeader[0]);
        }

        if(isset($projectBloc1Title[0])) {
            $sqlProjectBloc1Title = str_replace("'", "%%", $projectBloc1Title[0]);
        }

        if(isset($projectBloc1Content[0])) {
            $sqlProjectBloc1Content = str_replace("'", "%%", $projectBloc1Content[0]);
        }

        if(isset($projectBloc2Title[0])) {
            $sqlProjectBloc2Title = str_replace("'", "%%", $projectBloc2Title[0]);
        }

        if(isset($projectBloc2Content[0])) {
            $sqlProjectBloc2Content = str_replace("'", "%%", $projectBloc2Content[0]);
        }

        if(isset($projectBloc2Content[0])) {
            $sqlProjectBloc2Content = str_replace("'", "%%", $projectBloc2Content[0]);
        }


        if(isset($assets1Url[0])) {
            $sqlAssets1Url = str_replace("'", "%%", $assets1Url[0]);
        }

        if(isset($assets2Url[0])) {
            $sqlAssets2Url = str_replace("'", "%%", $assets2Url[0]);
        }

        if(isset($assets3Url[0])) {
            $sqlAssets3Url = str_replace("'", "%%", $assets3Url[0]);
        }

        if(isset($assets4Url[0])) {
            $sqlAssets4Url = str_replace("'", "%%", $assets4Url[0]);
        }



        $now = time();
        $sql = "INSERT INTO projects(title, header, bloc1Title, bloc1Content, bloc2Title, bloc2Content, asset1Url, asset2Url, asset3Url, asset4Url, locale) values
        ('$sqlTitle', '$sqlProjectHeader', '$sqlProjectBloc1Title', '$sqlProjectBloc1Content','$sqlProjectBloc2Title', '$sqlProjectBloc2Content', '$sqlAssets1Url',  '$sqlAssets2Url',  '$sqlAssets3Url', '$sqlAssets4Url',  '$locale')";

        // Processing to db for blog
        $db->queryDb($sql);

    }
}


// Process blogposts
function emptyProjectsTable($db) {
    $db->queryDb("DELETE FROM projects;");
}
