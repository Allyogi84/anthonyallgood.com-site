<?php 
/*
Template Name: Work Template 
*/
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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">My Work</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="showcase blog-grid">
            <div class="container">




                <!-- Blog Grid -->

                <div class="row justify-content-center text-center items">
<?php
 global $paged;
if( get_query_var( 'paged' ) )
    $my_page = get_query_var( 'paged' );
else {
    if( get_query_var( 'page' ) )
        $my_page = get_query_var( 'page' );
    else
        $my_page = 1;
    set_query_var( 'paged', $my_page );
    $paged = $my_page;
}   
        
    $args = array(
      'post_type' => 'works', 
      'order' => 'desc',
      'orderby' => 'post_date',
      'posts_per_page' => 6,
      'paged' => $my_page     
      );

$my_query = new WP_Query( $args ); $i = 1;


    while ( $my_query->have_posts() ) :  $my_query->the_post(); 
?>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card">
                            <h4><?php the_title(); ?></h4>
                            <?php wpe_excerpt('wpe_excerptlength_summery','new_excerpt_more');?>
                            <p class="clear">
                                <a href="<?php the_permalink() ?>" class="readmore"><?php if($readmore){echo $readmore;}else{echo "Read More"; }?></a></p>
                            <div class="gallery">
                                
                                    <a href="<?php the_post_thumbnail_url(); ?>"><?php   if ( has_post_thumbnail() ) {  ?>
                            <?php the_post_thumbnail(); ?>       
<?php }else{?><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/work-2.jpg" alt="Lorem ipsum"> <?php }  ?></a>
                               
                            </div>
                        </div>
                    </div>
            <?php  endwhile; ?>
            <?php  wp_reset_query(); ?>

                </div>

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav>
    <?php if(function_exists('wp_pagenavi')){ ?>
        <div class="pagenav post_nav">
            <?php wp_pagenavi( array( 'query' => $my_query ) ); ?>
        </div>
    <?php } ?>           
                        </nav>


                    </div>
                </div>
            </div>
        </section>


            


        <?php endwhile; ?>
        <?php endif; ?> 				
							
<?php get_footer(); ?>		