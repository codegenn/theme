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
    $string = json_decode(file_get_contents($url));
    $data_arr = $string->data;
    foreach ($data_arr as $key => $item) {
        echo '
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700">
                <div id="slider' . $key . '"></div>
            </li>
        ';
    }
}
?>