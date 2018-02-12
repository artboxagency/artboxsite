<?php

if (!$_SESSION["locale"]) {
    if($_GET["lang"] == "en") {
        $_SESSION["locale"] = "en";
      } else if($_GET["lang"] == "fr") {
        $_SESSION["locale"] = "fr";
      } else if(!isset($_GET["lang"])) {
        $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
        $_SESSION["locale"] = $lang;
      }
}

// Check for new values even if langage init
if (isset($_GET["lang"])) {
    $_SESSION["locale"] = $_GET["lang"];
}
