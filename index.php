<?php get_header(); ?>
	

    <!-- Content area -->
    <div class="content-area">

        <!-- PAGE BLOG -->
        <section class="page-section with-sidebar sidebar-right">
        <div class="container">
        <div class="row">

        <!-- Content -->
        <section id="content" class="content col-sm-8 col-md-9">

		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>		

            <article class="post-wrap" data-animation="fadeInUp" data-animation-delay="100">
                <div class="post-media">
                    <div class="post-type">
                        <i class="fa fa-music"></i>
                    </div>
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/preview/blog-post-3.jpg" alt=""/>
                </div>
                <div class="post-header">
                    <h2 class="post-title"><a href="blog-single.html">Standart Blog Post Header Here</a></h2>
                    <div class="post-meta">
                        <span class="post-date">
                            Posted on
                            <span class="day">17th</span>
                            <span class="month">May</span>
                            <span class="year">2014</span>
                        </span>
                        <span class="pull-right">
                            <i class="fa fa-comment"></i> <a href="#">12</a>
                        </span>
                    </div>
                </div>
                <div class="post-body">
                    <div class="post-excerpt">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris porttitor, mi eu sollicitudin aliquam, nulla nulla egestas nisl, vel egestas ligula elit non libero. Nullam sed rutrum leo. Quisque dapibus ante ac ante lacinia, sit amet rhoncus dui accumsan. Aenean luctus dui orci, sit amet rutrum nisl tincidunt sit amet. Fusce congue tellus eget fermentum feugiat. Curabitur eleifend dignissim augue. Pellentesque cursus dui et felis aliquam volutpat.</p>
                    </div>
                </div>
                <div class="post-footer">
                    <span class="post-readmore">
                        <a href="blog-single.html" class="btn btn-theme btn-theme-transparent">Read more</a>
                    </span>
                </div>
            </article>

    	<?php endwhile; ?>
		<?php endif; ?>	        

            <!-- Pagination -->
            <div class="pagination-wrapper">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
            <!-- /Pagination -->

        </section>
        <!-- Content -->

        <hr class="page-divider transparent visible-xs"/>

        <!-- Sidebar -->
        <aside id="sidebar" class="sidebar col-sm-4 col-md-3">

            <div class="widget categories">
                <h4 class="widget-title">Categories</h4>
                <ul>
                    <li><a href="#">Design <small>14</small></a></li>
                    <li><a href="#">Art Direction <small>21</small></a></li>
                    <li class="active"><a href="#">HTML and CSS <small>12</small></a></li>
                    <li><a href="#">Themes <small>19</small></a></li>
                    <li><a href="#">Wordpress <small>36</small></a></li>
                </ul>
            </div>


        </aside>
        <!-- Sidebar -->

        </div>
        </div>
        </section>
        <!-- /PAGE BLOG -->

    </div>
    <!-- /Content area -->	
				
							
<?php get_footer(); ?>		