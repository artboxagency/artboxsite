<?php require "site-parts/controllers/teamController.php";  ?>


<h2 class="title-font"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["team"] ?></h2>

<div id="news-homepage-container" class="grid">
    <?php foreach ($teamMembers as $key => $teamMember) { ?>
        <a href="site-parts/team-member.php?member=<?= $teamMember["id"]?>">
            <div class="single-news-home-page grid-item">
                <img class="grid-thumbnail" src="<?= $teamMember["pictureUrl"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $teamMember["firstname"]); ?>">
                <div class="black-box"></div>
                <h4><?= str_replace("%%", "'", $teamMember["firstname"] . $teamMember["lastname"]) ?></h4>
                <p><?= $teamMember["jobTitle"] ?></p>
                
            </div>
        </a>
    <?php } ?>
</div>
