<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <!--======= HOME MAIN SLIDER =========-->
    <section class="home-slider">
      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>
            <!-- Slider 1 -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src="images/slides/slide-1.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
              
              <!-- Layer -->
              <div class="tp-caption sft font-roboto tp-resizeme" 
                  data-x="left" data-hoffset="0"
                  data-y="bottom" data-voffset="-200" 
                  data-speed="700" 
                  data-start="1000" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"
                  style="color: #fff; font-size: 80px; font-weight:100; line-height:80px;"> Good design is <br>
                less design </div>
              
              <!-- Layer -->
              <div class="tp-caption font-roboto sfb text-center  tp-resizeme" 
                  data-x="left" data-hoffset="0"
                  data-y="bottom" data-voffset="-150" 
                  data-speed="700" 
                  data-start="1500" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #fff; font-size: 14px;  font-weight:300;"> When there’s no room for uncool stuff, when there’s only room for awesomeness.</div>
            </li>
            
            <!-- Slider 2 -->
            <li data-transition="fade" data-slotamount="5" data-masterspeed="700"> <img src="images/slides/slide-2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat"> 
              
              <!-- Layer -->
              <div class="tp-caption sft font-roboto tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="-30" 
                  data-speed="700" 
                  data-start="1000" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on"
                  style="color: #292f33; font-size: 80px; font-weight:100; line-height:80px;"> Eddard Stark</div>
              
              <!-- Layer -->
              <div class="tp-caption sfb text-center  tp-resizeme" 
                  data-x="center" data-hoffset="0"
                  data-y="center" data-voffset="30" 
                  data-speed="700" 
                  data-start="1500" 
                  data-easing="easeOutBack"
                  data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-elementdelay="0.1" 
                  data-endelementdelay="0.1" 
                  data-endspeed="300" 
                  data-captionhidden="on" 
                  style="color: #292f33; font-size: 16px; font-style:italic; font-weight:300;"> UI/UX Designer, Illustrator, King in the North</div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    
    <!-- INTRO -->
    <section class="intro section-150px">
      <div class="container">
        <div class="intro-in animate fadeInUp" data-wow-delay="0.4s">
          <p>We understand the importance of approaching each work integrally 
            and believe in the power of <strong> simple and easy communication.</strong> </p>
          <a href="about.html" class="btn">Know More</a> </div>
      </div>
    </section>
    
    <!-- SERVICES -->
    <section class="services">
      <div class="container-fluid"> 
        
        <!-- Services Row -->
        <div class="row">
          <div class="col-md-6 no-padding animate fadeInLeft" data-wow-delay="0.4s"> 
            
            <!-- Services 1 -->
            <div class="ser-in">
              <div class="tittle-block margin-bottom-40">
                <h2 class="margin-bottom-30">We Create Stuff</h2>
                <p>And believe that the work we do is a reflection of what we are.</p>
              </div>
              <p class="border-left padding-left-20 margin-top-10">It took just as much effort to get back to where he had been earlier 
                and was once more watching his legs as they struggled against 
                each even harder than before, if that was possible, he could think of no
                once more  possible for him to stay in bed and that the most sensible</p>
              <a href="#." class="btn">View our Work</a> </div>
          </div>
          
          <!-- Img -->
          <div class="col-md-6 no-padding animate fadeInRight" data-wow-delay="0.4s"> <img class="img-responsive" src="images/services-img-1.jpg" alt="" > </div>
        </div>
        
        <!-- Services Row -->
        <div class="row"> 
          
          <!-- Img -->
          <div class="col-md-6 no-padding animate fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="images/services-img-2.jpg" alt="" > </div>
          <!-- Services -->
          <div class="col-md-6 no-padding animate fadeInRight" data-wow-delay="0.4s">
            <div class="ser-part-2">
              <div class="tittle-block margin-bottom-40">
                <h3 class="margin-bottom-30 margin-top-0">From Pro VFX to simple Photo <br>
                  Retouching, we’re Kickass!</h3>
                <p>We are a team of eight sharing our expertise in Professional level <br>
                  Animation to Branding, Packaging and pretty Photography</p>
              </div>
              
              <!-- Services Row -->
              <ul class="row">
                
                <!-- Branding & Identity -->
                <li class="col-sm-6 margin-bottom-50 animate fadeInUp" data-wow-delay="0.6s">
                  <h6>Branding & Identity</h6>
                  <p>We are a team of eight sharing our expertise 
                    in Professional level Animation to Branding, 
                    Packaging and pretty Photography</p>
                </li>
                
                <!-- UI/UX AND GRAPHICS DESIGN -->
                <li class="col-sm-6 margin-bottom-50 animate fadeInUp" data-wow-delay="0.8s">
                  <h6>UI/UX AND GRAPHICS DESIGN</h6>
                  <p>We are a team of eight sharing our expertise 
                    in Professional level Animation to Branding, 
                    Packaging and pretty Photography</p>
                </li>
                
                <!-- MULTIMEDIA ANiMATION -->
                <li class="col-sm-6 animate fadeInUp" data-wow-delay="0.6s">
                  <h6>MULTIMEDIA ANiMATION</h6>
                  <p>We are a team of eight sharing our expertise 
                    in Professional level Animation to Branding, 
                    Packaging and pretty Photography</p>
                </li>
                <!-- PACKAGING  -->
                <li class="col-sm-6 animate fadeInUp" data-wow-delay="0.8s">
                  <h6>PACKAGING DESIGN</h6>
                  <p>We are a team of eight sharing our expertise 
                    in Professional level Animation to Branding, 
                    Packaging and pretty Photography</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- TEAM PACK -->
    <section class="team-pack padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <h2 class="simple-tittle margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">THE PACK</h2>
        
        <!-- TEAM ROW -->
        <div class="row"> 
          
          <!-- TEAM MEMBER 1  -->
          <div class="col-md-5 animate fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive bor-btm" src="images/team-1.jpg" alt=""> </div>
          
          <!-- TEAM Right -->
          <div class="col-md-7"> 
            
            <!-- TEAM MEMBER 1 Detail  -->
            <div class="team-detail animate fadeInRight" data-wow-delay="0.4s">
              <h3 class="font-bold">Mark Waugh</h3>
              <p>Mark is the coolest person yet so talented that he had a hard time in the Fox 
                River State Penitentiary along with the two members of KORA mafia.</p>
              
              <!-- Social Links -->
              <ul class="social-link">
                <li><a href="#.">Facebook</a></li>
                <li><a href="#.">Twitter</a></li>
                <li><a href="#.">Behance</a></li>
                <li><a href="#.">Google+</a></li>
              </ul>
            </div>
            <ul class="row margin-top-50">
              
              <!-- TEAM MEMBER 2 -->
              <li class="col-sm-6 animate fadeInUp" data-wow-delay="0.4s"> <img class="img-responsive" src="images/team-2.jpg" alt="">
                <h6 class="text-center font-bold margin-top-20">SHANE BOND</h6>
              </li>
              
              <!-- TEAM MEMBER 3 -->
              <li class="col-sm-6 animate fadeInUp" data-wow-delay="0.4s"> <img class="img-responsive" src="images/team-3.jpg" alt="">
                <h6 class="text-center font-bold margin-top-20">SHANE BOND</h6>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    
    <!-- PORTFOLIO -->
    <section class="portfolio padding-top-50 padding-bottom-50 animate fadeInUp" data-wow-delay="0.4s">
      <div class="container"> 
        <!-- Tittle -->
        <h2 class="simple-tittle margin-bottom-50">ARTWORK</h2>
      </div>
      
      <!-- PORTOFLIO ITEMS -->
      <div id="js-grid-awesome-work" class="col-4"> 
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-1.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project1.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-2.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project2.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-3.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project3.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-4.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project4.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-5.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project5.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-7.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project6.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-6.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project7.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
        
        <!-- PORTOFLIO ITEM -->
        <div class="cbp-item"> <img src="images/portfolio/1/img-8.jpg" alt="">
          <div class="hover-port">
            <div class="hover-in">
              <div class="position-center-center full-width">
                <h6>EMPATIA STUDIO</h6>
                <span>Branding, Identity, Stationary</span> <a href="ajax-projects/project8.html" class="cbp-singlePage" rel="nofollow"><i class="fa fa-link"></i></a> <a href="images/portfolio/1/img-3.jpg" class="cbp-lightbox" data-title=""><i class="ion-ios-search-strong"></i></a> </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- LOAD MORE -->
      <div id="js-loadMore-awesome-work" class="text-center"> <a href="ajax-projects/loadMore.html" class="cbp-l-loadMore-link btn text-center" rel="nofollow"> <span class="cbp-l-loadMore-defaultText">View More</span> <span class="cbp-l-loadMore-loadingText">Please Wait (Loading...</span> <span class="cbp-l-loadMore-noMoreLoading">No More Work Avaiable</span> </a> </div>
    </section>
    
    <!-- Blog News -->
    <section class="blog-news padding-top-100 padding-bottom-100">
      <div class="container">         
        <!-- Tittle -->
        <h2 class="simple-tittle margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">NEWS & BLOG</h2>
        <!-- Blog Row -->
        <ul class="row">
          
          <!-- Blog Text -->
          <li class="col-md-6 animate fadeInLeft" data-wow-delay="0.4s"> <a href="#." class="post-tittle">:: Top furniture designs that changed the World for good</a>
            <p>In this article Shane Bond shares his experience about the furniture design industry, its 
              trends, the history and more importantly the challenges!</p>
            <ul class="social-link">
              <li><a href="#.">Continue Reading</a></li>
              <li><a href="#.">Share</a></li>
            </ul>
          </li>
          
          <!-- Blog Img -->
          <li class="col-md-6 animate fadeInRight" data-wow-delay="0.4s"> <img class="img-responsive" src="images/blog/img-1.jpg" alt="" > </li>
        </ul>
        
        <!-- Blog Row -->
        <ul class="row margin-top-50">
          
          <!-- Blog Img -->
          <li class="col-md-6 animate fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="images/blog/img-2.jpg" alt="" > </li>
          
          <!-- Blog Text -->
          <li class="col-md-6 text-right animate fadeInRight" data-wow-delay="0.4s"> <a href="#." class="post-tittle">:: ASPECT RATIO AND LIGHTENING IN PHOTO PRESENTATIONS</a>
            <p>In this article Shane Bond shares his experience about the furniture design industry, its 
              trends, the history and more importantly the challenges!</p>
            <ul class="social-link">
              <li class="no-margin padding-left-30"><a href="#.">Continue Reading</a></li>
              <li class="no-margin padding-left-30"><a href="#.">Share</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- PRICING -->
    <section class="pricing padding-top-100 padding-bottom-100 light-gray-bg">
      <div class="container"> 
        
        <!-- Tittle -->
        <h2 class="simple-tittle margin-bottom-50 animate fadeInUp" data-wow-delay="0.4s">PRICING PLANS</h2>
        
        <!-- Blog Row -->
        <div class="row"> 
          
          <!-- Pricing Plan -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.4s"> 
            
            <!-- Pricing head -->
            <div class="price-in">
              <div class="price-head">
                <h6>:: BASIC ::</h6>
                <h3>$49</h3>
              </div>
              <ul>
                <li>
                  <p>Identity Design</p>
                </li>
                <li>
                  <p>Complete Branding</p>
                </li>
                <li>
                  <p>Optional Photoshoot</p>
                </li>
                <li>
                  <p>Printed Business Cards</p>
                </li>
              </ul>
              <a href="#." class="btn"> Confirm Order</a> </div>
          </div>
          
          <!-- Pricing Plan -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.6s"> 
            
            <!-- Pricing head -->
            <div class="price-in">
              <div class="price-head">
                <h6>:: ADVANCE ::</h6>
                <h3>$89</h3>
              </div>
              <ul>
                <li>
                  <p>Identity Design</p>
                </li>
                <li>
                  <p>Complete Branding</p>
                </li>
                <li>
                  <p>Optional Photoshoot</p>
                </li>
                <li>
                  <p>Printed Business Cards</p>
                </li>
              </ul>
              <a href="#." class="btn"> Confirm Order</a> </div>
          </div>
          
          <!-- Pricing Plan -->
          <div class="col-md-4 animate fadeInUp" data-wow-delay="0.8s"> 
            
            <!-- Pricing head -->
            <div class="price-in">
              <div class="price-head">
                <h6>:: PROFESSIONAL  ::</h6>
                <h3>$199</h3>
              </div>
              <ul>
                <li>
                  <p>Identity Design</p>
                </li>
                <li>
                  <p>Complete Branding</p>
                </li>
                <li>
                  <p>Optional Photoshoot</p>
                </li>
                <li>
                  <p>Printed Business Cards</p>
                </li>
              </ul>
              <a href="#." class="btn"> Confirm Order</a> </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Testimonials -->
    <section class="testimonials parallax padding-top-100 padding-bottom-100 animate fadeInUp" data-wow-delay="0.4s" style="background:url(images/bg/testi-bg.jpg) no-repeat;">
      <div class="container">
        <div  class="single-slides margin-top-50 margin-bottom-80 animate fadeInUp" data-wow-delay="0.4s">
          <div class="item">
            <p>“These people are really talented! I’m amazed at how they handeled everything from my brief to the final designs 
              for our Clothing line. Five stars, Highly Recommended!”</p>
            <span>DON Vito, Corleone Clothing</span> </div>
          <div class="item">
            <p>“These people are really talented! I’m amazed at how they handeled everything from my brief to the final designs I’m amazed at how they handeled everything from my brief to the final designs 
              for our Clothing line. Five stars, Highly Recommended!”</p>
            <span>DON Vito, Corleone Clothing</span> </div>
          <div class="item">
            <p>“These people are really talented! I’m amazed at how they handeled everything from my brief to the final designs 
              for our Clothing line. Five stars, Highly Recommended!”</p>
            <span>DON Vito, Corleone Clothing</span> </div>
        </div>
      </div>
    </section>
    
    <!-- Clients -->
    <section class="padding-top-100 padding-bottom-100">
      <div class="container"> 
        
        <!-- Tittle -->
        <div class="tittle-block margin-bottom-40 text-center animate fadeInUp" data-wow-delay="0.4s">
          <p>Some awesome Clients!</p>
        </div>
        
        <!-- Clients Logos -->
        <ul class="clients-col-6 animate fadeInUp" data-wow-delay="0.4s">
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-1.jpg" alt=""></a> </li>
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-2.jpg" alt=""></a> </li>
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-3.jpg" alt=""></a> </li>
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-4.jpg" alt=""></a> </li>
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-5.jpg" alt=""></a> </li>
          <li> <a href="#."><img class="img-responsive" src="images/clients/img-6.jpg" alt=""></a> </li>
        </ul>
      </div>
    </section>

    <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_footer(); ?>
