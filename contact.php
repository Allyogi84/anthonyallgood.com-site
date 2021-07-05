<?php 
/*
Template Name: Contact Page
*/
 get_header(); ?>
 

 		<?php  if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>	

 <div class="wrapper">



<!-- Container Wrap ## 
================================================= -->
<div class="container-wrap" >

		<div class="container">	
			<div class="row " >	
				<div class="col-md-6">
					<div class="address">
					   <?php if( get_field('office_address')){?>
					  		<h3><?php the_field('office_address'); ?></h3>
					  <?php }?>	
					   <?php if( get_field('location')){?>
					  		<div class="location"><p><?php the_field('location'); ?></p></div>
					  <?php }?>		
					   <?php if( get_field('phone_no')){?>
					  		<div class="phone_no"><p><?php the_field('phone_no'); ?></p></div>
					  <?php }?>		
					   <?php if( get_field('fax_no')){?>
					  		<div class="fax_no"><p><?php the_field('fax_no'); ?></p></div>
					  <?php }?>		
					   <?php if( get_field('map_code')){?>
					  		<div class="map_code"><?php the_field('map_code'); ?></div>
					  <?php }?>							
					</div>								
				</div>	
				<div class="col-md-6">
					<div class="right_side_content">	
					   <?php if( get_field('right_side_contact_form')){?>
					  		<div class="right_side"><?php the_field('right_side_contact_form'); ?></div>
					  <?php }?>							
					</div>								
				</div>
			</div><!-- End Row -->	
		</div><!-- End Container -->

</div><!-- End Container Wrap  -->			




		<?php endwhile; ?>
		<?php endif; ?>	

				
<?php get_footer(); ?>	