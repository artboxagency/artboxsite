<?php require_once "site-parts/controllers/projectsController.php"; ?>


<div id="projects-homepage-container" class="main-bloc">
    <h2  class="title-font first-animation"><?=  $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["projects"] ?></h2>
    <div class="grid second-animation">
        <?php foreach ($projects as $key => $project) { ?>
            <a class="cell" href="site-parts/project.php?pid=<?= $project["id"]?>&bc-project=j">

            <div class="single-news-home-page grid-item">
                <div class="thumbnail-grid-div" style="background-image: url('<?= $project["asset1Url"] ?>')"> </div>

                <div class="black-box"></div>
                <h4 class="shrinking-text"><?= str_replace("%%", "'", $project["title"]) ?></h4>
                <div class="news-stats">

                </div>
                <div class="news-brief grid-brief">

                </div>
            </div>

            </a>

        <?php } ?>
    </div>
</div>
