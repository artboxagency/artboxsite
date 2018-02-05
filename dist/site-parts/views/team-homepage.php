<?php require "site-parts/controllers/teamController.php";  ?>




<div id="team-homepage-container" class="main-bloc">
<h2 class="title-font first-animation"><?= $dictionnaries[$_SESSION["locale"]]["homePageTitle"]["team"] ?></h2>
    <div class="grid second-animation">
        <?php foreach ($teamMembers as $key => $teamMember) { ?>
            <a href="site-parts/team-member.php?member=<?= $teamMember["id"]?>">
                <div class="single-news-home-page grid-item">
                    <img class="grid-thumbnail square" src="<?= $teamMember["pictureUrl"] ?>" alt="artbox_image_news_<?= str_replace("%%", "'", $teamMember["firstname"]); ?>">
                    <div class="black-box square"></div>
                    <h4><?= str_replace("%%", "'", $teamMember["firstname"] . $teamMember["lastname"]) ?></h4>
                    <p><?= $teamMember["jobTitle"] ?></p>
                    <p><?= $teamMember["phonenumber"] ?>|</p>
                    <p><?= $teamMember["email"] ?></p>

                </div>
            </a>
        <?php } ?>
    </div>
</div>
