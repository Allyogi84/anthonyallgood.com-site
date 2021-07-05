<!-- Container Wrap 
================================================== -->	
<div class="slider_w" style="display: none;">
	<div id="large-header" class="//top-slider">

	<?php 	
		$posttype = 'slider';		
	$args = array(
	'post_type' => $posttype,  
	'order' => 'desc',
	'orderby' => 'post_date'
	);

	$my_query = new WP_Query( $args );

	while ( $my_query->have_posts() ) :  $my_query->the_post();

	?>
		<div class="slide">

			<?php 	$bg_image=get_field('bg_image'); 
			if($bg_image){ ?>
				<img src="<?php the_field('bg_image'); ?>" class="slide" alt=""/>   
			<?php } ?>  		

			<div class="s_content">
				<div class="container">
					<div class="col-sm-5 aright left_c">
						<?php
						// check if the repeater field has rows of data
						if( have_rows('left_side_content') ):

							// loop through the rows of data
							while ( have_rows('left_side_content') ) : the_row();
						?>					
								<img src="<?php the_sub_field('image_1'); ?>">
								<h2><?php the_sub_field('text_content_1'); ?></h2>
						<?php
							endwhile;
						endif;
						?>					
					</div>


					<div class="col-sm-7 right_c">
						<?php
						// check if the repeater field has rows of data
						if( have_rows('right_side_content') ):

							// loop through the rows of data
							while ( have_rows('right_side_content') ) : the_row();
						?>			

						    <?php $title_1=get_sub_field('title_1');

					        if($title_1) { ?> 		
								<h3><?php echo $title_1; ?></h3>        		
							<?php } ?>		

						    <?php $title_2=get_sub_field('title_2');

					        if($title_2) { ?> 		
								<h2><?php echo $title_2; ?></h2>        		
							<?php } ?>		
										
								<?php the_sub_field('text_content_2'); ?>

						<?php
							endwhile;
						endif;
						?>		

					</div>
				</div>
			</div>
		</div>   

	<?php endwhile; ?>
		<?php  wp_reset_query(); ?>							

	</div><!-- /.top-slider -->
	
	<div class="nav_box pro_sl"></div>

</div><!-- /.slider -->