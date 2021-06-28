<body>
    <div id="wrap" class="no-padding">
        <div id="main-wrapper">
            <?php include get_template_directory() . '/home/nav-header.php'; ?>
            <section class="home-slider">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src=<?php echo get_template_directory_uri() . "/assets/images/slides/slide-1.jpg" ?> alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <div class="tp-caption sft font-roboto tp-resizeme" data-x="left" data-hoffset="0" data-y="bottom" data-voffset="-200" data-speed="700" data-start="1000" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style="color: #fff; font-size: 80px; font-weight:100; line-height:80px;"> Good design is <br>
                                    less design 
                                </div>
                                <div class="tp-caption font-roboto sfb text-center  tp-resizeme" data-x="left" data-hoffset="0" data-y="bottom" data-voffset="-150" data-speed="700" data-start="1500" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style="color: #fff; font-size: 14px;  font-weight:300;"> When there’s no room for uncool stuff, when there’s only room for awesomeness.</div>
                            </li>
                            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src=<?php echo get_template_directory_uri() . "/assets/images/slides/slide-2.jpg" ?> alt="" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <div class="tp-caption sft font-roboto tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="-30" data-speed="700" data-start="1000" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style="color: #292f33; font-size: 80px; font-weight:100; line-height:80px;"> Eddard Stark</div>
                                <div class="tp-caption sfb text-center  tp-resizeme" data-x="center" data-hoffset="0" data-y="center" data-voffset="30" data-speed="700" data-start="1500" data-easing="easeOutBack" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="300" data-captionhidden="on" style="color: #292f33; font-size: 16px; font-style:italic; font-weight:300;"> UI/UX Designer, Illustrator, King in the North</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <?php include get_template_directory() . '/home/intro.php'; ?>
            <?php include get_template_directory() . '/home/services.php'; ?>
            <?php include get_template_directory() . '/home/portfolio.php'; ?>
            <?php include get_template_directory() . '/home/blog-news.php'; ?>
            <?php include get_template_directory() . '/home/pricing.php'; ?>
            <?php include get_template_directory() . '/home/testimonials.php'; ?>
            <?php include get_template_directory() . '/home/clients.php'; ?>
        </div>
    </div>
</body>