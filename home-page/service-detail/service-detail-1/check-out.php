<!--======= CHECK OUT SLIDER =========-->
<div class="d-flex j-center margin-top-50 margin-b-20">
    <h3><strong><span class="check-color">CHECK</span> OUT OUR WORK?</strong></h3>
</div>
<section class="container margin-b-40">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <?php service_detail_item() ?>
            </ul>

        </div>
    </div>
</section>

<?php
function service_detail_item()
{
    $url = get_template_directory_uri() . "/assets/js/service_detail_1.json";
    $string = file_get_contents($url);
    echo $string;
    if ($string["data"] === false) {
        echo '<div class="my_class"> fasle 1</div>';
    }
    $json_a = json_decode($string["data"], true);
    if ($json_a === null) {
        echo '<div class="my_class"> fasle 2</div>';
    }
    // echo $json_a;
    foreach ($json_a as $key => $item) {
        echo '
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                <div id="slider' . $key . '"></div>
            </li>
        ';
    }
}
?>