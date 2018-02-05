<?php require "site-parts/controllers/drivingForcesController.php"; ?>


<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["drivingForces"] ?></h2>
<div id="news-homepage-container" class="grid main-bloc">
    <?php foreach ($drivingForces as $key => $singleDrivingForce) { ?>
        <div class="single-news-home-page grid-item">
            <img class="grid-thumbnail square" src="<?= $singleDrivingForce["imageUrl"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $singleDrivingForce["firstname"]); ?>">
            <div class="black-box square"></div>
            <h4><?= str_replace("%%", "'", $singleDrivingForce["firstname"] .  $singleDrivingForce["lastname"])?></h4>
            <div class="news-stats">
                <span class="news-date"><?= $singleDrivingForce["scenename"]; ?></span>
            </div>
            <a href="/blog/article/<?= $singleHomePage["id"]?>"></a>
        </div>
    <?php } ?>
</div>
