<?php 
get_header(); ?>
	
        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 

        <!-- Banner -->
        <section id="slider" class="p-0 featured odd">
            <div class="swiper-container slider-disabled slider-h-75">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        <!-- 
                            Custom Image
                            <img src="assets/images/bg-1.jpg" class="image-fit banner">
                        -->
                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text"><?php the_title(); ?></h1>
 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="intro" class="single">
            <div class="container">
                <div class="row">
                    <main class="col-12 col-md-12 p-0">
                        <div class="row intro">
                            <div class="col-12 align-self-center">
<?php the_content(); ?>
                            </div>
                        </div>        
                    </main>

                </div>
            </div>
        </section>




            


        <?php endwhile; ?>
        <?php endif; ?> 				
							
<?php get_footer(); ?>		