<!-- Clients -->
<section class="padding-top-100 padding-bottom-100">
    <div class="container">

        <!-- Tittle -->
        <div class="tittle-block margin-bottom-40 text-center animate fadeInUp" data-wow-delay="0.4s">
            <p>Some awesome Clients!</p>
        </div>

        <!-- Clients Logos -->
        <?php service_detail_item("/data-services/service_detail_1.json") ?>
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
    
        $string_ul = '<ul class="clients-col-6 animate fadeInUp" data-wow-delay="0.4s">';
        $string_li = '';
    
        $temp = 0;
        foreach ($json_a as $item) if($temp ++ < 6) {
            $string_li .= '<li> <a href="#."><img class="img-responsive" src='. $item["image"] .' alt=""></a> </li>';
        };
    
        echo $string_ul.$string_li.'</ul>';
    }
?>