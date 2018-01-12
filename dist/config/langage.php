<?php

if(isset($_GET["lang"]) == "en") {
    $_SESSION["locale"] = "en";
}   else {
    $_SESSION["locale"] = "fr";
}



