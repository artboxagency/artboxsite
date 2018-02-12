<?php
if (isset($_GET["bc-article"])) {
    require_once "_DB.php";
    $db = new DbController("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
} else if(isset($_GET["bc-project"])) {
    require_once "_DB.php";
    $db = new DbController("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
} else if(isset($_GET["lang"])) {
    require_once "_DB.php";
    $db = new DbController("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
}


else {
    $db = new Db("127.0.0.1", "root", "152d0ef1676507ee1fdc0172fa306102e8416de085f2f905", "");
}

//$db->queryDb($sql);

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
