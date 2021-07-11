<?php

function b2w_them_style()
{
    $theme_url = get_template_directory_uri();
    ?>
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/ionicons.min.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/bootstrap.min.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/font-awesome.min.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/main.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/style.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/responsive.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/animate.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/cubeportfolio.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/rs-plugin/css/settings.css'?> type="text/css" media="screen">
        <link rel="stylesheet" href=<?php echo $theme_url . '/assets/css/custom.css'?> type="text/css" media="screen">
    <?php

    // wp_enqueue_style('ionicons', $theme_url . '/assets/css/ionicons.min.css');
    // wp_enqueue_style('boostrap', $theme_url . '/assets/css/bootstrap.min.css');
    // wp_enqueue_style('fontawesome', $theme_url . '/assets/css/font-awesome.min.css');
    // wp_enqueue_style('main', $theme_url . '/assets/css/main.css');
    // wp_enqueue_style('styles', $theme_url . '/style.css');
    // wp_enqueue_style('responsive', $theme_url . '/assets/css/responsive.css');
    // wp_enqueue_style('animte', $theme_url . '/assets/css/animate.css');
    // wp_enqueue_style('cubeportfolio', $theme_url . '/assets/css/cubeportfolio.css');
    // wp_enqueue_style('settings', $theme_url . '/assets/rs-plugin/css/settings.css');
    // wp_enqueue_style('custom', $theme_url . '/assets/css/custom.css');
}

function add_js()
{
    $theme_url = get_template_directory_uri();
?>
    <script src=<?php echo $theme_url . '/assets/js/jquery-1.11.3.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/wow.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/bootstrap.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/own-menu.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/owl.carousel.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/counter.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/jquery.cubeportfolio.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/modernizr.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js' ?>></script>
    <script src=<?php echo $theme_url . '/assets/js/main.js' ?>></script>
<?php
}
add_action('wp_footer', 'add_js');

function service_item()
{
    $url = get_template_directory_uri() . "/data-services/services.json";
    $string = file_get_contents($url);
    if ($string === false) {
        echo '<div class="my_class"> fasle 1</div>';
    }
    $json_a = json_decode($string, true);
    if ($json_a === null) {
        echo '<div class="my_class"> fasle 2</div>';
    }
    foreach ($json_a as $item) {
        echo '
            <a class="cbp-item photo pack" href=' . $item["url"] . '>
                <img src=' . $item['image'] . ' alt="Image ' . $item['title'] . '">
                <div class="item-description">
                    <div class="d-flex flex-column">
                        <p><strong>' . $item['title']       . '</strong></p>
                        <p>'         . $item['description'] . '</p>
                        <p><strong>' . $item['price']       . '</strong></p>
                    </div>
                </div>
            </a>
        ';
    }
}

?>