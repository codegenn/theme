<!-- <link rel="stylesheet" type="text/css" href="asset/css/ionicons.min.css">
<link href="asset/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="asset/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="asset/css/main.css" rel="stylesheet" type="text/css">
<link href="asset/css/style.css" rel="stylesheet" type="text/css">
<link href="asset/css/responsive.css" rel="stylesheet" type="text/css">
<link href="asset/css/animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="rs-plugin/asset/css/settings.css" media="screen" /> -->

<?php

  function fn_theme_script(){
    wp_enqueue_style('custom-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css');
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css');
    // wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    // wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');

  }

  add_action("wp_enqueue_script", "fn_theme_script");

  // <script src="asset/js/jquery-1.11.3.min.js"></script> 
  // <script src="asset/js/wow.min.js"></script> 
  // <script src="asset/js/bootstrap.min.js"></script> 
  // <script src="asset/js/own-menu.js"></script> 
  // <script src="asset/js/owl.carousel.min.js"></script> 
  // <script src="asset/js/jquery.cubeportfolio.min.js"></script> 
  // <script src="asset/js/counter.js"></script> 

  // <!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
  // <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
  // <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
  // <script src="asset/js/main.js"></script>

  function twentyseventeen_panels_js() {
    wp_enqueue_script( 'jquery', get_theme_file_uri( '/asset/js/jquery-1.11.3.min.js' ));
    wp_enqueue_script( 'wow', get_theme_file_uri( '/asset/js/wow.min.js' ) );
    wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/asset/js/bootstrap.min.js' ) );
    wp_enqueue_script( 'own-menu', get_theme_file_uri( '/asset/js/own-menu.js' ) );
    wp_enqueue_script( 'owl', get_theme_file_uri( '/asset/js/owl.carousel.min.js' ) );
    wp_enqueue_script( 'cubeportfolio', get_theme_file_uri( '/asset/js/jquery.cubeportfolio.min.js' ) );
    wp_enqueue_script( 'counter', get_theme_file_uri( '/assets/js/customize-controls.js' ) );
    wp_enqueue_script( 'tools', get_theme_file_uri( '/asset/rs-plugin/js/jquery.themepunch.tools.min.js' ) );
    wp_enqueue_script( 'revolution', get_theme_file_uri( '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js' ) );
    wp_enqueue_script( 'main', get_theme_file_uri( '/asset/js/main.j' ) );
  }
  add_action( 'customize_controls_enqueue_scripts', 'twentyseventeen_panels_js' );
?>


