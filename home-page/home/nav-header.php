<header class="main-header header-fix">
    <div class="container">
        <div class="logo"> <a href="index.html"> <img src=<?php echo get_template_directory_uri() . "/assets/images/logo.png" ?> alt="Sprint Logo"></a> </div>
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