<?php require "site-parts/controllers/clientsController.php"; ?>
<div id="clients-homepage-container" class="main-bloc">
    <div class="first-animation">
        <h2  class="title-font first-animation">Clients</h2>
        <!-- <p class="second-aimation"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["clients"] ?></p> -->

    </div>
        <div class="grid four-grid second-animation">
            <?php foreach ($clients as $key => $client) { ?>
                <a class="cell four-cell" href="<?= $client["externalUrl"] ?>">

                <div class="single-news-home-page grid-item">

                    <div class="thumbnail-grid-div" style="background-image: url('<?= $client["imgSource"] ?>')"> </div>
                    <div class="black-box"></div>
                    <h4 class="shrinking-text"><?= str_replace("%%", "'", $client["name"]) ?></h4>
                    <div class="news-stats">

                    </div>
                    <div class="news-brief grid-brief">

                    </div>
                </div>

                </a>

            <?php } ?>

        </div>
    </div>
