<?php

require_once "../Autoloader.php";

$dir = '../../../content/menu';
$files = scandir($dir);
$db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");

// Kill db
emptyMenuTable($db);

foreach($files as $key => $file) {

    // Loop through each files
    if(strlen($file) > 3) {

        // Get file content
        $filePath = $dir . "/" . $file;
        $content = file_get_contents($filePath);

        // Get article parts
        $menuEn = getContentsBetween($content, '#menuItemEn', '#/menuItemEn');
        $menuFr = getContentsBetween($content, '#menuItemFr', '#/menuItemFr');
        $link = getContentsBetween($content, '#menuItemFr', '#/menuItemFr');

        // Build english menu
        $sqlMenu = array();
        $counter = 0;
        foreach($menuEn as $key => $value) {
            $sqlMenu[$counter]["label"] = $value;
            $sqlMenu[$counter]["link"] = $value . ".php";
            $sqlMenu[$counter]["locale"] = "en";
            $counter++;
        }
        foreach($menuFr as $key => $value) {
            $sqlMenu[$counter]["label"] = $value;
            $sqlMenu[$counter]["link"] = $value . ".php";
            $sqlMenu[$counter]["locale"] = "fr";
            $counter++;
        }


        // Processing to db for blog
        foreach($sqlMenu as $key => $menuItem) {
            $label = $menuItem["label"];
            $link = $menuItem["link"];
            $locale = $menuItem["locale"];
            $sql = "INSERT INTO menu(menuLabel, menuLink, locale) VALUES ('$label', '$link', '$locale')";
            $db->queryDb($sql);
        }
    }
}

function emptyMenuTable($db) {
    $db->queryDb("DELETE FROM menu;");
}

