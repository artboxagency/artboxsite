<?php require_once "controllers/headerController.php"?>
<header>
    <div class="header-container">
    <!-- -->
        <svg id="#logoDes" data-name="Votre design" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144 72"><title>artbox_logo</title><g class="lines" id="g7565">
            <path id="path7567" d="M103.58,24.73a9.06,9.06,0,0,0-7.18,3c-1.74,2-2.62,4.8-2.62,8.26a12.29,12.29,0,0,0,2.62,8.26,10,10,0,0,0,14.33,0A12.29,12.29,0,0,0,113.35,36c0-2.37-.65-5.95-2.6-8.26h0A9,9,0,0,0,103.58,24.73Zm0,4.9a3.25,3.25,0,0,1,3,1.59A8.79,8.79,0,0,1,107.63,36a8.82,8.82,0,0,1-1.09,4.78,3.55,3.55,0,0,1-5.92,0A8.73,8.73,0,0,1,99.53,36a8.71,8.71,0,0,1,1.09-4.78A3.25,3.25,0,0,1,103.58,29.63Z"/></g><path id="path7551" d="M25,43.15h-9.1l-1.44,4.09H8.57l8.36-22.46h6.94l8.36,22.46H26.38L25,43.15M17.31,39h6.18L20.41,30,17.31,39"/><path id="path7553" d="M54.08,24.78v4.37h5.31V47.24h5.79V29.15h5.31V24.78Z"/><path id="path7555" d="M127.63,35.78l7.8,11.46h-6l-5.26-7.67-5.2,7.67h-6.07l7.8-11.46-7.5-11h6L124.14,32l4.91-7.23h6.08l-1.83,2.68-5.67,8.32"/><g id="g7557"><g id="g7559"><path id="path7561" d="M34.36,24.78V47.24h5.27V39.45h3.64l5.07,7.77h5.59l-1.86-2.78-3.54-5.5a7.43,7.43,0,0,0,3.85-6.83c0-4.05-2.69-7.33-6-7.33Zm5.28,4.73H44a2.43,2.43,0,0,1,2.17,2.63A2.44,2.44,0,0,1,44,34.78H39.64Z"/></g></g><path id="path7563" d="M73.61,24.78V47.24H85.93a6,6,0,0,0,6.16-5.9,5.93,5.93,0,0,0-3.92-5.5,5.91,5.91,0,0,0-2.84-11.06Zm5.79,3.94h3.87a2.18,2.18,0,0,1,1.93,2.36,2.18,2.18,0,0,1-1.93,2.36H79.4Zm0,8.72h4.7a2.65,2.65,0,0,1,2.36,2.86,2.65,2.65,0,0,1-2.36,2.87H79.4Z"/></svg>
        <div id="menu-container">
            <div class="menu-hamburger">
                <span class="line-1"></span>
                <span class="line-2"></span>
                <span class="line-3"></span>
            </div>
            <div id="menu">
            <div class="logo-container">
            </div>
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
    </div>


</header>
