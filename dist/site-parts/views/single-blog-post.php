<?php require_once "controllers/singleBlogPostController.php";?>

<?php 

if(isset($_GET["article"])) {

    $uniquePost = getSinglePost($_GET["article"]);
};
  
?>



<div id="single-blog">

    <div class="post-header">
        <img src="<?= $uniquePost["imgsrc"] ?>" alt="">
        <h4 class="blog-title"><?= $uniquePost["title"] ?></h4>
        <span class="single-blog-date"><?= $uniquePost["date"] ?></span>-<span><?= $uniquePost["author"]; ?></span>
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