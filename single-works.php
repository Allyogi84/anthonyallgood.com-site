<?php get_header(); ?>


		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	

	 
        <!-- Banner -->
        <section id="slider" class="p-0 featured odd singlepost">
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
        <section id="blog" class="single">
            <div class="container">
                <div class="row content">
                    <main class="col-12 col-lg-8 p-0">
                            <div class="gallery">
                                
                                    <?php   if ( has_post_thumbnail() ) {  ?>
                            <?php the_post_thumbnail(); ?>       
<?php }else{?><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/work-2.jpg" alt="Lorem ipsum"> <?php }  ?>
                               
                            </div>
                        <!-- Text -->
                        <div class="row">
                            <div class="col-12 align-self-center">
<?php the_content(); ?>
                            </div>
                        </div>

                        <!-- Gallery -->
                     
                        <div class="gallery row justify-content-center">
<?php  	$add_images=get_field('add_images'); ?>                        	
<?php if( $add_images ): ?>                           	
            <?php foreach( $add_images as $add_image ): ?>            	
                            <a class="col-6 col-sm-4 col-md-3  item" href="<?php echo $add_image['url']; ?>">
                                <img src="<?php echo $add_image['url']; ?>" class="w-100">
                            </a>
            <?php endforeach; ?>    
<?php endif; ?>                         
                        </div>



            
                    </main>
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">


                        
                        <!-- Categories -->
                        <div class="row item">
                            <div class="col-12 align-self-center">
                                <h4>Other Works</h4>
                                <ul class="list-group list-group-flush">
<?php        
    $args = array(
      'post_type' => 'works', 
      'order' => 'desc',
      'orderby' => 'post_date',
      'posts_per_page' => 4
      );

$my_query = new WP_Query( $args ); 

    while ( $my_query->have_posts() ) :  $my_query->the_post(); 
?>                                       
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                        
                                    </li>
    <?php  endwhile; ?>
    <?php  wp_reset_query(); ?>  

                                </ul>
                            </div>
                        </div>
                            

                    </aside>
                </div>
            </div>
        </section>

 
<?php
	endwhile;
	endif;
?>














		

	
<?php get_footer(); ?>	