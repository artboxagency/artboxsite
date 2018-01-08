<?php
//require "./controllers/newsController.php";
require "site-parts/controllers/modelController.php";

?>

<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["model"] ?></h2>
<div id="model-homepage-container" class="">
    <div class="bloc-left">
        <h4 class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc1"]["title"]; ?></h4>
        <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc1"]["content"]; ?></p>
    </div>
    <div class="bloc-right">
        <h4 class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc2"]["title"]; ?></h4>
        <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc2"]["content"]; ?></p>

    </div>
    <div class="bloc-left">
        <h4 class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc3"]["title"]; ?></h4>
        <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc3"]["content"]; ?></p>
    </div>

    <h4 class="font-medium-title know-more "><?=  $dictionnaries[$_SESSION["locale"]]["generalContent"]["knowMore"]; ?><span class="plus-to-know-more">+</span></h4>
</div>
