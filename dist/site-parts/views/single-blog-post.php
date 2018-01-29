<?php require_once "controllers/singleBlogPostController.php";?>

<?php

if(isset($_GET["article"])) {

    $uniquePost = getSinglePost($_GET["article"]);
};

if (isset($_GET["bc-article"])) {

    $uniquePost = getSinglePost($_GET["bc-article"], "newsposts");
}
?>

<div id="single-page-header">
    <div class="">
        <i class="fa fa-home return-homepage" aria-hidden="true"></i>
    </div>
</div>
<div id="single-blog">

    <div class="post-header">
        <h4 class="blog-title title-font"><?= $uniquePost["title"] ?></h4>
        <img src="<?= $uniquePost["imgsrc"] ?>" alt="">
        <div class="post-infos">
            <span class="single-blog-date"><?= $uniquePost["date"] ?></span>-<span><?= $uniquePost["author"]; ?></span>
        </div>

        <p class="post-header">
            <?= $uniquePost["header"];  ?>
        </p>
    </div>
    <div class="post-body font-small">
        <?php
            echo $uniquePost["paragraphes"];
        ?>
    </div>
</div>
