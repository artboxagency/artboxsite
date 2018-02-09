<?php require "site-parts/controllers/newsController.php"; ?>


<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["news"] ?></h2>
<div id="news-container" class="grid">
    <?php foreach ($allNews as $key => $singleNews) { ?>

    <a href="site-parts/blog.php?bc-article=<?= $singleNews["id"]?>">
        <div class="cell">
            <div class="single-news-home-page grid-item">
                <img class="grid-thumbnail" src="<?= $singleNews["imgsrc"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $singleNews["title"]); ?>">
                <div class="black-box"></div>
                <h4><?= str_replace("%%", "'", $singleNews["title"]) ?></h4>
                <div class="news-stats">
                    <span class="news-date"><?= $singleNews["date"]; ?></span> <span>- par</span> <span class="news-author"><a href=""><?= $singleNews["author"] ?></a></span>
                </div>
                <div class="news-brief grid-brief">
                    <!-- Process for header infos -->
                    <?php $thumbnailBrief = str_replace("%%", "'", explode( ' ', $singleNews["header"])); ?>
                    <p>
                        <?php for ($i=0; $i < 10; $i++) {
                            echo $thumbnailBrief[$i] . " ";
                        }?>
                        ...
                    </p>
                </div>
            </div>
        </div>
    </a>
    <?php } ?>
</div>
