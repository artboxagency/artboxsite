<?php


if($_GET["lang"] == "en") {
    $_SESSION["locale"] = "en";
} else if($_GET["lang"] == "fr") {
    $_SESSION["locale"] = "fr";
}
