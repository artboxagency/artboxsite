<?php require_once "site-parts/controllers/projectsController.php"; ?>

<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["projects"] ?></h2>
<div id="news-homepage-container" class="grid">
    <?php foreach ($projects as $key => $project) { ?>
        <div class="single-news-home-page grid-item">
            <img class="grid-thumbnail" src="<?= $project["asset1Url"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $project["title"]); ?>">
            <div class="black-box"></div>
            <h4><?= str_replace("%%", "'", $project["title"]) ?></h4>
            <div class="news-stats">

            </div>
            <div class="news-brief grid-brief">

            </div>
            <a href="/blog/article/<?= $project["id"]?>"></a>
        </div>
    <?php } ?>
</div>
