<?php 
/*
Template Name: HomePage Template 
*/
 get_header(); ?>
 

        <!-- Banner -->
        <section id="slider" class="p-0 featured left all">
            <div class="swiper-container slider-disabled animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <img data-aos="zoom-out-up" data-aos-delay="800" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hero-12.png" class="image-full">
                        <div class="slide-content row justify-content-start">
                            <div class="col-12 d-flex inner">
                                <div class="left align-self-center text-center text-md-left">
                                    <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">ALL THINGS DIGITAL.</h1>
                                    <p data-aos="zoom-out-up" data-aos-delay="800" class="description">Front End Developer and Digital Marketer.</p>
                                    <a href="#intro" data-aos="zoom-out-up" data-aos-delay="1200" class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i class="icon-cup"></i>GET STARTED</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- Features -->
        <section id="intro" class="offers featured right">
            <div class="container">
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-camera"></i>
                            <h4>DIGITAL MARKETING</h4>
                            <p>I have rich experience in creating and executing digital marketing campaigns. My core competencies are SEO, SEM, PPC, and SOCIAL MEDIA MARKETING.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-note"></i>
                            <h4>FRONT END DEVELOPMENT</h4>
                            <p>I love clean design and creating websites/applications using HTML, CSS, JavaScript. For frameworks and libraries, I use React and JQuery. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <i class="icon icon-lock"></i>
                            <h4>BACK END DEVELOPMENT</h4>
                            <p>Building and maintaining environments using C#, Node.JS, Python, SQL, ASP.NET MVC, and PHP.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [image] -->
        <section id="about" class="highlights featured left">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <h2 class="featured alt">About Me</h2>
                                <p>Hello, I am Anthony, a Front-End Developer and Digital Marketer based in Tampa, Florida. I have had the opportunity of deploying websites, apps, and marketing campaigns for small and large scale businesses around the world. I love clean design, coffee, and surfing.
</p>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-12 p-0">

                                <div data-aos="fade-right" data-aos-delay="200" class="row item">
                                   <div class="col-12 col-md-2 align-self-center">
                                        
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        <h4>MY RESUME</h4>
                                       
                                    </div>                                      
                                    <div class="col-12 col-md-2 align-self-center">
                                        <i class="icon icon-fire"></i>
                                    </div>
                                    <div class="col-12 col-md-9 align-self-center">
                                        
                                        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
                                        <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/Anthony_Allgood_-_Lead_Front_End_Developer.pdf" data-aos="zoom-out-up" data-aos-delay="1200" class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i class="icon-cloud-download"></i>DOWNLOAD</a>
                                        <a href="#partner" data-aos="zoom-out-up" data-aos-delay="1200" class="ml-auto mr-auto ml-md-0 mt-4 btn primary-button"><i class="icon-wrench"></i>Tools I Use</a>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery col-12 col-md-6">
                        <a href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/about-115.jpg">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/about-115.jpg" class="image-fit">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- About [video] -->
<!--         <section id="video" class="highlights featured right">
            <div class="container short">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Watch the Video</h2>
                        <p class="text-max-800">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus, id pellentesque mauris tincidunt.</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 gallery">
                        <a href="https://www.youtube.com/watch?v=7e90gBu4pas" class="square-image d-flex justify-content-center align-items-center">
                            <i class="icon bigger icon-control-play"></i>
                            <img src="assets/images/news-4.jpg" class="image-fit">
                        </a>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Services -->
        <section id="services" class="offers featured left">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">My Services</h2>
                        <p>These are my core competencies and what I love to do.</p>
                    </div>
<!--                     <div class="col-12 col-md-3 align-self-end">
                        <a href="services-1.html" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</i></a>
                    </div> -->
                </div>
                <div class="row justify-content-center text-center items">
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured left">
                            <i class="icon icon-layers"></i>
                            <h4>Social Media Marketing</h4>
                            <p>I love amazing conversions and have a knack for understanding the objective and targeting the right audience for it.</p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-rocket"></i>
                            <h4>Search Engine Optimization</h4>
                            <p>Great On page and Off page SEO are huge factors in delivering more customers to your business.</p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-briefcase"></i>
                            <h4>Pay-Per-Click</h4>
                            <p>PPC is the bread and butter of most companies in the digital advertising space. Getting the right message, design and placement is optimal for the best conversions.</p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-plane"></i>
                            <h4>Search Engine Marketing</h4>
                            <p>SEM and retargeting is one of the most valuable tools in business, and can help convert consumers at a higher rate than traditional forms of marketing.</p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <i class="icon icon-chart"></i>
                            <h4>Front-End Development</h4>
                            <p>I love clean design and creating websites/applications using HTML, CSS, JavaScript. For frameworks and libraries, I use React and JQuery. </p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card featured right">
                            <i class="icon icon-drawer"></i>
                            <h4>Back-End Development</h4>
                            <p>Building and maintaining environments using C#, Node.JS, Python, SQL, ASP.NET MVC, and PHP. </p>
                            <!-- <a href="service-single-1.html"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Work -->
        <section id="work" class="offers secondary featured right">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">My Work</h2>
                        <p>These are some of my featured works.</p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="<?php  echo get_option('home'); ?>/work" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</i></a>
                    </div>
                </div>
                <div class="row justify-content-center text-center items">
<?php        
    $args = array(
      'post_type' => 'works', 
      'order' => 'desc',
      'orderby' => 'post_date',
      'posts_per_page' => 6
      );

$my_query = new WP_Query( $args ); 

    while ( $my_query->have_posts() ) :  $my_query->the_post(); 
?>                    
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <div class="gallery">
                                
                                    <a href="<?php the_post_thumbnail_url(); ?>"><?php   if ( has_post_thumbnail() ) {  ?>
                            <?php the_post_thumbnail(); ?>       
<?php }else{?><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/work-2.jpg" alt="Lorem ipsum"> <?php }  ?></a>
                               <br>
                               <br>
                            </div>                            
                            <h4><?php the_title(); ?></h4>
                            <?php wpe_excerpt('wpe_excerptlength_summery','new_excerpt_more');?>
                            <p class="clear">
                                <a href="<?php the_permalink() ?>" class="readmore btn mx-auto mr-md-0 ml-md-auto primary-button"><?php if($readmore){echo $readmore;}else{echo "Read More"; }?></a></p>

                        </div>
                    </div>
    <?php  endwhile; ?>
    <?php  wp_reset_query(); ?>  


                </div>
            </div>
        </section>


        <!-- Team -->
        <section id="team" class="carousel">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2><?php the_field('testi_title'); ?></h2>
                        <p class="text-max-800"><?php the_field('testi_sub_title'); ?></p>
                    </div>
                </div>
                <div class="swiper-container slider-mid items">
                    <div class="swiper-wrapper">
<?php
if( have_rows('add_testimonials') ):
    while ( have_rows('add_testimonials') ) : the_row();
?>        
                        <div class="swiper-slide slide-center text-center item">
                            <div class="row card">
                                <div class="col-12">
                                    <img src="<?php the_sub_field('image'); ?>" alt="Adams Baker" class="person">
                                    
                                    <p><?php the_sub_field('description'); ?></p>
                                    <h4><?php the_sub_field('client_name'); ?></h4>
                                    <h5><?php the_sub_field('designation'); ?></h5>

                                </div>
                            </div>
                        </div>

<?php   
    endwhile;
endif;
?>





                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Partners -->
        <section id="partner" class="logos">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
<?php 
$section_title=get_field('section_title');
$section_description=get_field('section_description');

?>
                    
                        <h2><?php echo $section_title; ?></h2>

                        <?php if($section_description){ ?><p class="text-max-800"><?php echo $section_description; ?></p>
                    <?php  } ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
                </div>                
                <div class="swiper-container slider-min">
                    <div class="swiper-wrapper">
<?php

// check if the repeater field has rows of data
if( have_rows('add_logos_images') ): $secid=1;

    // loop through the rows of data
    while ( have_rows('add_logos_images') ) : the_row();

$logo_image=get_sub_field('logo_image');
?>                          
                        <div class="swiper-slide slide-center item">
                            <img src="<?php echo $logo_image['url']; ?>" class="image-fit w-85">
                        </div>
<?php endwhile; ?>
<?php endif; ?>  

                    </div>
                </div>
            </div>
        </section>



        <!-- Blog -->
        <section id="blog" class="carousel showcase">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <h2 class="featured">Blog</h2>
                        <p></p>
                    </div>
                    <div class="col-12 col-md-3 align-self-end">
                        <a href="<?php  echo get_option('home'); ?>/blog" class="btn mx-auto mr-md-0 ml-md-auto primary-button"><i class="icon-grid"></i>VIEW ALL</i></a>
                    </div>
                </div>



                <div class="swiper-container slider-mid items">
                    <div class="swiper-wrapper">                
<?php        
    $args = array(
      'post_type' => 'post', 
      'order' => 'desc',
      'orderby' => 'post_date',
      'posts_per_page' => 9
      );

$my_query = new WP_Query( $args ); 


    while ( $my_query->have_posts() ) :  $my_query->the_post(); 
?>
                        <div class="swiper-slide slide-center item">
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <?php   if ( has_post_thumbnail() ) {  ?>
                            <div class="thumb"><?php the_post_thumbnail('blogimg'); ?></div>         
<?php }else{?><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/news-6-h.jpg" alt="Lorem ipsum"> <?php }  ?>
                                    
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>">
                                            <h4 class="m-0"><?php the_title(); ?></h4>
                                        </a>
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="blog-single-post-1.html" class="d-lg-flex align-items-center"><i class="icon-user"></i><?php the_author(); ?></a>
                                        <a href="blog-single-post-1.html" class="d-lg-flex align-items-center"><i class="icon-clock"></i><?php the_time('F d'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php  endwhile; ?>
            <?php  wp_reset_query(); ?>                         

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- Subscribe -->
        <section id="subscribe" class="subscription">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h2>Newsletter</h2>
                        <p class="text-max-800">Stay up to date with new deployments, education and other projects I am apart of. Sign up below.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        <form class="row m-auto items">
                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                                <input type="text" class="form-control input-style" placeholder="Name" required>
                            </div>
                            <div class="col-12 col-lg-5 m-lg-0 input-group align-self-center item">
                                <input type="text" class="form-control input-style" placeholder="Email" required>
                            </div>
                            <div class="col-12 col-lg-2 m-lg-0 input-group align-self-center item">
                                <button class="btn primary-button w-100"><i class="icon-note"></i>SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="form featured all">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 align-self-center text-center text-md-left">

                        <!-- Success Message -->
                        <div class="row success message">
                            <div class="col-12 p-0">
                                <i class="icon bigger icon-check"></i>
                                <h3>Success</h3>
                                <p>Your message has been sent successfully.</p>
                                <a href="" class="btn mx-auto primary-button"><i class="icon-refresh"></i>REFRESH</a>
                            </div>
                        </div>

                        <!-- Steps Message -->
                        <div class="row intro">
                            <div class="col-12 p-0">

                                <!-- Text 1 -->
                                <div id="text-1">
                                    <h2 class="featured alt">Let's Talk?</h2>
                                    <p>Interested in working together? Feel free to reach out and let's grab a coffee.</p>
                                </div>

                                <!-- Text 2 -->
                                <div id="text-2" style="display: none">
                                    <h2 class="featured alt">Forms Work</h2>
                                    <p>This template has an indispensable differential on a web page. <b>The forms are functional</b> with field validation.</p>
                                </div>

                                <!-- Text 3 -->
                                <div id="text-3" style="display: none">
                                    <h2 class="featured alt">Limited Offer</h2>
                                    <p>With so many resources it is difficult to believe that it is sold for such a low price. <b>Run!</b> It is for a limited time.</p>
                                </div>

                            </div>
                        </div>

                        <!-- Form -->
                        <div class="row text-center">
                            <div class="col-12 p-0">
                                <form id="msform">
                                    <ul id="progressbar">
                                        <li class="active">Personal Details</li>
                                        <li>Company Budget</li>
                                        <li>Service Setup</li>
                                    </ul>

                                    <!-- Group 1 -->
                                    <fieldset id="group-1">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="name" minlength="3" class="form-control input-style" placeholder="Name" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="email" name="email" minlength="3" class="form-control input-style" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="phone" minlength="3" class="form-control input-style" placeholder="Phone" required>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a id="next-1" class="next btn primary-button">NEXT<i class="btn-icon icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 2 -->
                                    <fieldset id="group-2">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="company" minlength="3" class="form-control input-style" placeholder="Company" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="manager" minlength="3" class="form-control input-style" placeholder="Manager" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <i class="icon-arrow-down"></i>
                                                <select name="budget" minlength="1" class="form-control input-style" required>
                                                    <option value="0" selected disabled>What's your budget range?</option>
                                                    <option>Less than $2.000</option>
                                                    <option>$2.000 — $5.000</option>
                                                    <option>$5.000 — $10.000</option>
                                                    <option>$10,000+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                            <a id="prev-2" class="previous btn primary-button mr-4"><i class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                            <a id="next-2" class="next btn primary-button">NEXT<i class="btn-icon icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                    <!-- Group 3 -->
                                    <fieldset id="group-3">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" minlength="3" class="form-control input-style" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0 d-flex justify-content-center justify-content-md-start">
                                            <a id="prev-3" class="previous btn primary-button mr-4"><i class="btn-icon icon-arrow-left-circle"></i>PREV</a>
                                            <a id="next-3" class="send btn primary-button">SEND<i class="btn-icon icon-login left"></i></a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="gallery col-12 col-md-6 pl-md-5 d-none d-md-block">

                        <!-- Step 1 -->
                        <a id="step-1" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-3.jpg">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-3.jpg" class="image-fit">
                        </a>

                        <!-- Step 2 -->
                        <a id="step-2" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-2.jpg" style="display:none">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-2.jpg" class="image-fit">
                        </a>

                        <!-- Step 3 -->
                        <a id="step-3" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-1.jpg" style="display:none">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-1.jpg" class="image-fit">
                        </a>

                        <!-- Step 4 -->
                        <a id="step-4" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-3.jpg" style="display:none">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gallery-3.jpg" class="image-fit">
                        </a>

                    </div>
                </div>
            </div>
        </section>
                            
<?php get_footer(); ?>	