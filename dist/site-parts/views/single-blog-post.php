<?php require_once "controllers/singleBlogPostController.php";?>

<?php

if(isset($_GET["article"])) {

    $uniquePost = getSinglePost($_GET["article"]);
};

if (isset($_GET["bc-article"])) {

    $uniquePost = getSinglePost($_GET["bc-article"], "newsposts");
}
?>

<div id="single-blog">
    <h4 class="blog-title title-font super-large-single"><?= $uniquePost["title"] ?></h4>
    <div class="blog-container">
        <div class="post-header">


            <div class="header-image-container">
                <img src="<?= $uniquePost["imgsrc"] ?>" alt="">
            </div>

            <div class="post-infos">
                <span class="single-blog-date"><?= $uniquePost["date"] ?></span>-<span><?= $uniquePost["author"]; ?></span>
            </div>

            <p class="post-header">
                <?= $uniquePost["header"];  ?>
            </p>
        </div>
        <div class="post-body font-description">
            <?= $uniquePost["paragraphes"]; ?>
        </div>
    </div>
</div>
