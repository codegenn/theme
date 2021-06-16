<?php

function b2w_them_style()
{
    wp_enqueue_style('ionicons_css', get_template_directory_uri() . '/assets/css/ionicons.min.css');
    wp_enqueue_style('boostrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('styles_css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('responsive_css', get_template_directory_uri() . '/assets/css/responsive.css');
    wp_enqueue_style('animte_css', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('cubeportfolio_css', get_template_directory_uri() . '/assets/css/cubeportfolio.css');
    wp_enqueue_style('settings_css', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css');
    wp_enqueue_style('custom', get_template_directory_uri() . '/assets/rs-plugin/css/custom.css');
}
add_action('wp_enqueue_scripts', 'b2w_them_style');

function b2w_theme_js()
{
    wp_enqueue_script('boostrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquerry'), '', true);
    wp_enqueue_script('counter_js', get_template_directory_uri() . '/assets/js/counter.js', array('jquerry'), '', true);
    wp_enqueue_script('jquerry_js', get_template_directory_uri() . '/assets/js/jquery-1.11.3.min.js', array('jquerry'), '', true);
    wp_enqueue_script('cubeportfolio_js', get_template_directory_uri() . '/assets/js/jquery.cubeportfolio.min.js', array('jquerry'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquerry'), '', true);
    wp_enqueue_script('modernizr_js', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquerry'), '', true);
    wp_enqueue_script('owl_js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquerry'), '', true);
    wp_enqueue_script('own-menu_js', get_template_directory_uri() . '/assets/js/own-menu.js', array('jquerry'), '', true);
    wp_enqueue_script('wow_js', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquerry'), '', true);
    wp_enqueue_script('tools_js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquerry'), '', true);
    wp_enqueue_script('revolution_js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquerry'), '', true);
}
add_action('wp_enqueue_scripts', 'b2w_theme_js');

function fn_nav_menu() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'text_domain'),
        'footer-menu' => __('Footer Menu', 'text_domain'),
    ));
}

add_action('init', 'fn_nav_menu');

function add_link_atts($atts) {
    $atts['class'] = 'ownmenu_li';
    $atts['id'] = '';

    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_atts');

?>