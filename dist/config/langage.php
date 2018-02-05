<?php

if($_GET["lang"] == "en") {
    $_SESSION["locale"] = "en";
} else if($_GET["lang"] == "fr") {
    $_SESSION["locale"] = "fr";
} else if(!isset($_GET["lang"])) {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $_SESSION["locale"] = $lang;
}
