<?php
$db = new Db("127.0.0.1", "root", "3GgzQaxjaSV0c2ZqGmrwq0OevywGE6tb3okHGbL", "");


$sql = "INSERT INTO services (name) values('shh') ";
$db->queryDb($sql);

function getMenuItem($db, $locale) {

    $menu = $db->getData("select * from menu;");
    $_processer = array();
    foreach($menu as $key => $menuItem) {
        if($menuItem["locale"] == $locale) {
            $_processer[] = $menuItem;
        }
    }
    $menu = $_processer;

    return $menu;
}

$menuItems = getMenuItem($db, $_SESSION["locale"]);
