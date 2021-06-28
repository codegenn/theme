<!--======= CHECK OUT SLIDER =========-->
<div class="d-flex j-center margin-top-50 margin-b-20">
    <h3><strong><span class="check-color">CHECK</span> OUT OUR WORK?</strong></h3>
</div>
<section class="container margin-b-40" style="height: 571px;">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <?php service_detail_item("/data-services/service_detail_1.json") ?>
        </div>
    </div>
</section>

<?php
    function service_detail_item($url_file) {
        $url = get_template_directory_uri() . $url_file;
        $string = file_get_contents($url);
        if ($string === false) {
            echo '<div class="my_class"> fasle 1</div>';
        }
        $json_a = json_decode($string, true);
        if ($json_a === null) {
            echo '<div class="my_class"> fasle 2</div>';
        }
    
        $string_ul = '<ul>';
        $string_li = '';
    
    
        foreach ($json_a as $item) {
            $string_li .= '<li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src='. $item['image'] .' ?> alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"></li>';
        };
    
        echo $string_ul.$string_li.'</ul>';
    }
?>