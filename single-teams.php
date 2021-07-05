<?php get_header(); ?>

		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	

    <!-- Content area -->
    <div class="content-area">

        <!-- PAGE BLOG -->
        <section class="page-section with-sidebar sidebar-right">
        <div class="container">
        <div class="row">

        <!-- Content -->
        <section id="content" class="content single col-sm-8 col-md-9">



	 
                     <div class="teampost col-sm-12" data-animation="fadeInUp" data-animation-delay="100">
                        <div class="no-border no-padding text-center">
                                        <div class=" media">
                                        <?php   if ( has_post_thumbnail() ) {  ?>
                                        <?php the_post_thumbnail( 'blogimg' ); ?>
                                        <?php }else{?>
                                            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/preview/speaker-1.jpg" alt="">
                                        <?php }  ?>    

                                        </div>    
                            <div class="caption before-media">
                                <h1 class="post-title"><?php the_title(); ?></h1>
                                 <?php if(get_field('company_name')){ ?> <p class="category"><?php the_field('company_name'); ?></p><?php } ?>
                                <?php   if(get_field('designation')){ ?> <p class="category designation"><?php the_field('designation'); ?></p><?php } ?>
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


		<?php endwhile; ?>
		<?php endif; ?>	



			

		

	
<?php get_footer(); ?>	