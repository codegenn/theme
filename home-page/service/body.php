<body>
    <div id="wrap" class="no-padding">
        <div id="main-wrapper">
            <header class="main-header header-fix">
              <div class="container">
                <div class="logo"> <a href="index.html"> <img src="https://www.vinaretoucher.com/wp-content/uploads/2019/08/logo-22.png" alt="Sprint Logo"></a> </div>
                <nav>
                  <ul id="ownmenu" class="ownmenu">
                    <li><a href="/" class="text-uppercase"> HOME</a>
                    </li>
                    <li class="active"><a href="service" class="text-uppercase">SERVICE</a>
                      <ul class="dropdown">
                        <li><a href="single-exposure-blending" class="text-uppercase">Real estate photos</a></li>
                        <li><a href="multiple-exposure-blending" class="text-uppercase">DAY TO DUSK</a></li>
                        <li><a href="virtual-stage" class="text-uppercase">Virua stagings</a></li>
                        <li><a href="floor-plan" class="text-uppercase">Floor Plan</a></li>
                        <li><a href="rendering" class="text-uppercase">rendering</a></li>
                        <li><a href="video-editting" class="text-uppercase">Video</a></li>
                        <li><a href="retouch" class="text-uppercase">Retouch</a></li>
                        <li><a href="360-image" class="text-uppercase">360° IMAGE</a></li>
                        <li><a href="headshot" class="text-uppercase">Headshots</a></li>
                      </ul>
                    </li>
                    <li><a href="contact-us" class="text-uppercase">CONTACT US</a></li>
                    <li><a href="blog" class="text-uppercase">BLOG</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </header>
            <?php include get_template_directory() . '/service/sub-banner.php'; ?>
            <?php include get_template_directory() . '/service/portfolio.php'; ?>
            <?php include get_template_directory() . '/service/achievements.php'; ?>
            <?php include get_template_directory() . '/service/testimonials.php'; ?>
            <?php include get_template_directory() . '/home/clients.php'; ?>
        </div>
    </div>
</body>