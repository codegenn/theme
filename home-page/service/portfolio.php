<!-- PORTFOLIO -->
<section class="portfolio padding-top-100">

    <!-- PORTOFLIO ITEMS -->
    <div class="container">
        <div id="js-grid-awesome-work" class="with-space col-3">

            <?php

            $string = file_get_contents(get_template_directory_uri() . "/data-services/services.json");
            if ($string === false) {
                echo '<div class="my_class">' . $cart->count_product . '</div>';
            }

            $json_a = json_decode($string, true);
            if ($json_a === null) {
                // deal with error...
                echo '<div class="my_class"> fasle 2</div>';                // deal with error...
            }

            foreach ($json_a as $dataItems => $item) {
                // print_r($person_a['status']);
                echo '<div class="cbp-item photo pack">
                <img src=' . get_template_directory_uri() . $item['image'] . ' alt="">
                <div class="item-description">
                    <div class="d-flex flex-column">
                        <p><strong>' . $item['title'] . '</strong></p>
                        <p>' . $item['description'] . '</p>
                        <p><strong>' . $item['price'] . '</strong></p>
                    </div>
                </div>
            </div>';                // deal with error...
            }

            ?>

            <!-- <div class="cbp-item photo pack">
                <img src=<?php echo get_template_directory_uri() . "/assets/images/portfolio/2/img-1.jpg" ?> alt="">
                <div class="item-description">
                    <div class="d-flex flex-column">
                        <p><strong>IMAGE ENCHANCEMENT</strong></p>
                        <p>Perfect for real estate photo editing so you can present your listing with top-notch, retouched
                            professional - looking photos</p>
                        <p><strong>US$1.60</strong></p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

</section>