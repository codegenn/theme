<!-- HEADER -->
<header class="main-header header-fix">
    <div class="container">
        <div class="logo"> <a href="index.html"> <img src=<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?> alt="Sprint Logo"></a> </div>

        <!-- Nav -->
        <nav>
            <?php
                if(has_nav_menu('primary-menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'container' => false,
                        'menu_class' => "ownmenu",
                        'menu_id' => 'ownmenu',
                        'item_wrap' => '3$s'
                    ));
                }
            ?>
        </nav>
    </div>
</header>

<!-- <ul id="ownmenu" class="ownmenu">
    <li class="active"><a href="index.html"> HOME</a>
        <ul class="dropdown">
            <li><a href="index.html">Index 1</a></li>
            <li><a href="index-2.html">Index 2</a></li>
            <li><a href="index-3.html">Index 3</a></li>
            <li><a href="index-4.html">Index 4</a></li>
            <li><a href="index-5.html">Index 5</a></li>
            <li><a href="index-6.html">Index 6</a></li>
            <li><a href="index-7.html">Index 7</a></li>
            <li><a href="index-8.html">Index 8</a></li>
            <li><a href="index-9.html">Index 9</a></li>
        </ul>
    </li>
</ul> -->