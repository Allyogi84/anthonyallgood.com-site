<?php get_header(); ?>
	



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
                                <h1 data-aos="zoom-out-up" data-aos-delay="400" class="title effect-static-text">Search</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="showcase blog-grid">
            <div class="container">
                <div class="row">
					<div id="search_t" class="col-12">
						<div id="searchpage">
							<form method="get" id="searchpageform" action="<?php bloginfo('home'); ?>" >
							<input id="sform" class="form-control input-style rounded" type="text" name="s" onfocus="if(this.value=='search site'){this.value=''};" onblur="if(this.value==''){this.value='search site'};" value="<?php echo wp_specialchars($s, 1); ?>" />
							<input id="formsubmit" class="send btn primary-button" type="submit" value="Search" />
							</form>
						</div>

					</div>
				</div>


                <!-- Blog Grid -->

                <div class="row items">

        <?php  if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?> 


                    <div class="col-12 col-md-6 col-lg-4 item">
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



<?php endwhile; else:?>  
                
                        <h1 class="notf">Not Found</h1>
                        <p>The page you are looking is not here..</p><br/><br/>

                <br/><br/>
                        
<?php endif; ?>                     
                
            </div>
        

                <!-- Pagination -->
                <div class="row">
                    <div class="col-12">
                        <nav>
<?php        
        if(function_exists('wp_pagenavi')) :
            wp_pagenavi();
        endif; 
?>         
                        </nav>


                    </div>
                </div>


        
        </div>
    </section>
    <!-- End Blog Section -->
				
				
			
<?php get_footer(); ?>	