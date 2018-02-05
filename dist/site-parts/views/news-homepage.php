<?php
//require "./controllers/newsController.php";
require "site-parts/controllers/newsController.php";

?>

<div style="display:none;"id="news-homepage-container" class="main-bloc">
    <h2 class="first-animation title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["news"] ?></h2>
    <div class="grid second-animation">
        <?php foreach ($homepageNews as $key => $singleHomePage) { ?>

        <a href="site-parts/blog.php?article=<?= $singleHomePage["id"]?>">
            <div class="single-news-home-page grid-item">
                <img class="grid-thumbnail" src="<?= $singleHomePage["imgsrc"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $singleHomePage["title"]); ?>">
                <div class="black-box"></div>
                <h4><?= str_replace("%%", "'", $singleHomePage["thumbnailTitle"]) ?></h4>
                <div class="news-stats">
                    <span class="news-date"><?= $singleHomePage["date"]; ?></span> <span>- par</span> <span class="news-author"><a href=""><?= $singleHomePage["author"] ?></a></span>
                </div>
                <div class="news-brief grid-brief">
                    <!-- Process for header infos -->
                    <?php $thumbnailBrief = str_replace("%%", "'", explode( ' ', $singleHomePage["header"])); ?>
                    <p>
                        <?php for ($i=0; $i < 10; $i++) {
                            echo $thumbnailBrief[$i] . " ";
                        }?>
                        ...
                    </p>
                </div>

            </div>
        </a>
        <?php } ?>
    </div>
</div>
