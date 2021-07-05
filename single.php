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


                        <!-- Comments -->
                        <div class="row">
                            <div class="col-12 align-self-center">
                            	<?php	 	  comments_template(); ?>
                            </div>
                        </div>
            
                    </main>
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                        <!-- Author -->
                        <div class="row item">
                            <div class="col-12 align-self-center text-left">
                                <h4>By John Doe</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#"><img src="assets/images/team-1.jpg" alt="Lorem ipsum"></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span class="d-lg-flex align-items-center"><i class="icon-clock mr-2"></i>3 Days Ago</span> <span class="badge tag active">Technology</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Categories -->
                        <div class="row item">
                            <div class="col-12 align-self-center">
                                <h4>Categories</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Technology</a>
                                        <span class="badge circle">23</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Education</a>
                                        <span class="badge circle">41</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Industry</a>
                                        <span class="badge circle">26</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Development</a>
                                        <span class="badge circle">75</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Architecture</a>
                                        <span class="badge circle">39</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Management</a>
                                        <span class="badge circle">62</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            
                        <!-- Tags -->
                        <div class="row item">
                            <div class="col-12 align-self-center">
                                <h4>Tags</h4>
                                <div class="ml--03">
                                    <span class="badge tag active">Technology</span>
                                    <span class="badge tag">App</span>
                                    <span class="badge tag">Health</span>
                                    <span class="badge tag">Industry</span>
                                    <span class="badge tag">Work</span>
                                    <span class="badge tag">Mobile</span>
                                    <span class="badge tag">Management</span>
                                    <span class="badge tag">Development</span>
                                    <span class="badge tag">Education</span>
                                    <span class="badge tag">Business</span>
                                </div>
                            </div>
                        </div>

                        <!-- Most Viwed -->
                        <div class="row item">
                            <div class="col-12 align-self-center text-left">
                                <h4>Most Viwed</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="blog-single-post-1.html"><img src="assets/images/gallery-1.jpg" alt="Lorem ipsum"></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="blog-single-post-1.html"><img src="assets/images/gallery-2.jpg" alt="Lorem ipsum"></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="blog-single-post-1.html"><img src="assets/images/gallery-3.jpg" alt="Lorem ipsum"></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="blog-single-post-1.html"><img src="assets/images/gallery-4.jpg" alt="Lorem ipsum"></a>
                                        Lorem ipsum dolor sit amet consectetur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                            
                        <!-- Share This -->
                        <div class="row item">
                            <div class="col-12 align-self-center">
                                <h4>Share This</h4>
                                <ul class="navbar-nav social share-list">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-instagram ml-0"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-facebook"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-linkedin"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="icon-social-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>     
	<?php endif; ?>	
                    </aside>
                </div>
            </div>
        </section>

 
<?php
	endwhile;
	endif;
?>














		

	
<?php get_footer(); ?>	