<?php
require_once "controllers/headerController.php"
 ?>
<header>
    <div class="header-container">


        <div id="menu-container">
            <div class="menu-hamburger">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
            </div>
            <div id="menu">
                <nav>
                    <ul>
                        <span class="close-button">x</span>
                        <?php foreach($menuItems as $key => $menuItem) { ?>
                            
                            
                                <li class="menu-item"><a href="#<?= explode("." ,$menuItem["menuLink"])[0] ?>"><?= $menuItem["menuLabel"]; ?> </a> </li>
                                <!---  <li class="menu-item"><a href="site-parts/pages/<?= strtolower($menuItem["menuLink"]); ?>"><?= $menuItem["menuLabel"]; ?> </a> </li>  -->
                        <?php } ?>
                        <div id="searchbar">
                            <i class="fa fa-search" id="search-item" aria-hidden="true"> </i><input type="text" id="search-bar-term" class="font-description" name="search-tearm"  value="">
                        </div>
                    </ul>

                </nav>
            </div>
        </div>
        <div class="logo-container">
            <a href="#"><img src="assets/images/artbox_marketing_social.png" alt="CNDL LOGO"></a>
        </div>


    </div>


</header>
