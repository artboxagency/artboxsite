<div id="home-page-infos-container" class="main-bloc">

    <div class="centered-container">
        <div class="home-page-infos first-animation">
            <p class="large-block-font"><?=  $dictionnaries[$_SESSION["locale"]]["header"]; ?></p>
        </div>

        <div class="video-container">
            <video class="main-page-video second-animation"  muted autoplay>
              <source src="assets/video/home.mp4" type="video/mp4">
              <source src="movie.ogg" type="video/ogg">
            </video>
            <div class="equation">
                <div class="all-page-wrapper">
                    <div class="animation square-border ">
                        <h4 class="font-medium-title"><?= $dictionnaries[$_SESSION["locale"]]["homePageContent"]["formulas"]["value1"] ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
