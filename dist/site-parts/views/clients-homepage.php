<?php require "site-parts/controllers/clientsController.php"; ?>
<div id="clients-homepage-container" class="">
        <h2  class="title-font first-animation">Clients</h2>
        <div class="grid second-animation">
            <?php foreach ($clients as $key => $client) { ?>
                <a href="<?= $client["externalUrl"] ?>">

                <div class="single-news-home-page grid-item">
                    <img class="grid-thumbnail" src="<?= $client["imgSource"] ?>" alt="artbox_client<?= str_replace("%%", "'", $client["name"]); ?>">
                    <div class="black-box"></div>
                    <h4><?= str_replace("%%", "'", $client["name"]) ?></h4>
                    <div class="news-stats">

                    </div>
                    <div class="news-brief grid-brief">

                    </div>
                </div>

                </a>

            <?php } ?>

        </div>
    </div>
