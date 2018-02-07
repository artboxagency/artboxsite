<?php
//require "./controllers/newsController.php";
require "site-parts/controllers/modelController.php";

?>


<div id="model-homepage-container" class="main-bloc">
    <h2 class="title-font first-animation"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["model"] ?></h2>
    <div class="main-bloc">
        <div class="header-bloc">
            <h4 class="large-block-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["blocHead"]["title"]; ?></h4>
            <p class="font-description "><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc1"]["content"]; ?></p>
            <div class="equation custom-grid">
                <div class="all-page-wrapper row">
                    <div class="animation square-border col custom-grid-item">
                        <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value1"] ?></h4>
                    </div>

                    <div class="animation square-border small col custom-grid-item">
                        <h4 class="symbol font-medium-title">+</h4>
                    </div>

                    <div class="animation square-border col custom-grid-item">
                        <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value2"] ?></h4>
                    </div>

                    <div class="animation square-border small col custom-grid-item">
                        <h4 class="symbol font-medium-title">=</h4>
                    </div>

                    <div class="animation square-border col custom-grid-item">
                        <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value3"] ?></h4>
                    </div>
                </div>


                    <p class="font-description "><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc1"]["content"]; ?></p>
            </div>

        </div>

        <div class="dual-bloc-container">

            <!-- Bloc Left -->
            <div class="bloc-solo bloc-left second-animation">
                <h4 class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc2"]["title"]; ?></h4>
                <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc2"]["content"]; ?></p>
            </div>

            <!-- Bloc Right -->
            <div class="bloc-solo bloc-right second-animation">
                <h4 class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc3"]["title"]; ?></h4>
                <p class="font-description"><?=  $dictionnaries[$_SESSION["locale"]]["homePageContent"]["model"]["bloc3"]["content"]; ?></p>
            </div>

        </div>


        <h4 style="display:none;" class="font-medium-title know-more fifth-animation"><?=  $dictionnaries[$_SESSION["locale"]]["generalContent"]["knowMore"]; ?><span class="plus-to-know-more">+</span></h4>
    </div>
</div>
