<?php 
/*
Template Name: Speaker Page 
*/

get_header(); ?>
	

    <!-- Content area -->
    <div class="content-area">

        <!-- PAGE BLOG -->
        <section class="page-section with-sidebar sidebar-right">
        <div class="container">
        <div class="row">

        <!-- Content -->
        <section id="content" class="content col-sm-8 col-md-9">


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
  'post_type' => 'teams',  
  'order' => 'asc',
  'orderby' => 'post_date',  
  'posts_per_page' =>100,
  'paged' => $my_page
  );

$my_query = new WP_Query( $args );

    while ( $my_query->have_posts() ) :  $my_query->the_post();

?>                                     
                    <div class="teampost grid col-md-6" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="no-border no-padding text-center">
                                        <div class="post media">
                                        <a href="<?php the_permalink() ?>" class="btn caption-link"><?php   if ( has_post_thumbnail() ) {  ?>
                                        <?php the_post_thumbnail( 'blogimg' ); ?>
                                        <?php }else{?>
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/preview/speaker-1.jpg" alt="">
                                        <?php }  ?>    </a>
    
                                        </div>    
                            <div class="caption before-media">
                                <a href="<?php the_permalink() ?>" class="btn caption-link"><h3 class="caption-title"><?php the_title(); ?></h3></a>
                                 <?php if(get_field('company_name')){ ?> <p class="caption-category"><?php the_field('company_name'); ?></p><?php } ?>
                                <?php   if(get_field('designation')){ ?> <p class="caption-category designation"><?php the_field('designation'); ?></p><?php } ?>
                            </div>
                            <div class="caption">
                                <?php the_content(); ?>
                                <ul class="social-line list-inline text-center">
                                    <?php if(get_field('facebook_link')){ ?><li><a href="<?php the_field('facebook_link'); ?>" class="facebook"><i class="fa fa-facebook"></i></a></li><?php } ?>
                                    <?php if(get_field('twitter_link')){ ?><li><a href="<?php the_field('twitter_link'); ?>" class="twitter"><i class="fa fa-twitter"></i></a></li><?php } ?>
                                    <?php if(get_field('linkedin_link')){ ?><li><a href="<?php the_field('linkedin_link'); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a></li><?php } ?>
                                   <?php if(get_field('instagram_link')){ ?> <li><a href="<?php the_field('instagram_link'); ?>" class="instagram"><i class="fa fa-instagram"></i></a></li><?php } ?>
                                    <?php if(get_field('youtube_link')){ ?><li><a href="<?php the_field('youtube_link'); ?>" class="google"><i class="fa fa-youtube"></i></a></li><?php } ?>                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- -->

<?php    endwhile; ?> 
         
    
<?php  wp_reset_query(); ?>     



        </section>
        <!-- Content -->

        <hr class="page-divider transparent visible-xs"/>

        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">

<?php if(dynamic_sidebar('Sidebar') == '')  ?>

        </aside>
        <!-- Sidebar -->

        </div>
        </div>
        </section>
        <!-- /PAGE BLOG -->

    </div>
    <!-- /Content area -->	
				
							
<?php get_footer(); ?>		