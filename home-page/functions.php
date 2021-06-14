<?php

function b2w_them_style()
{
    wp_enqueue_style('boostrap_css', get_template_directory_uri() . 'asset/css/bootstrap.min.css');
    wp_enqueue_style('styles_css', get_template_directory_uri() . 'asset/css/styles.css');
    wp_enqueue_style('animte_css', get_template_directory_uri() . 'asset/css/animate.css');
    wp_enqueue_style('cubeportfolio_css', get_template_directory_uri() . 'asset/css/cubeportfolio.css');
    wp_enqueue_style('font-awesome_css', get_template_directory_uri() . 'asset/css/font-awesome.min.css');
    wp_enqueue_style('ionicons_css', get_template_directory_uri() . 'asset/css/ionicons.min.css');
    wp_enqueue_style('main_css', get_template_directory_uri() . 'asset/css/main.css');
    wp_enqueue_style('responsive_css', get_template_directory_uri() . 'asset/css/responsive.css');
}
add_action('wp_enqueue_scripts', 'b2w_them_style');

function b2w_theme_js()
{
    wp_enqueue_script('boostrap_js', get_template_directory_uri() . 'asset/asset/js/bootstrap.min.js', array('jquerry'), '', true);
    wp_enqueue_script('wow_js', get_template_directory_uri() . 'asset/js/wow.min.js', array('jquerry'), '', true);
    wp_enqueue_script('own-menu_js', get_template_directory_uri() . 'asset/js/own-menu.js', array('jquerry'), '', true);
    wp_enqueue_script('owl_js', get_template_directory_uri() . 'asset/js/owl.carousel.min.js', array('jquerry'), '', true);
    wp_enqueue_script('cubeportfolio_js', get_template_directory_uri() . 'asset/js/jquery.cubeportfolio.min.js', array('jquerry'), '', true);
    wp_enqueue_script('counter_js', get_template_directory_uri() . 'asset/js/counter.js', array('jquerry'), '', true);
}
add_action('wp_enqueue_scripts', 'b2w_theme_js');

?>