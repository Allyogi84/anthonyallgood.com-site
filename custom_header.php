<?php $header_style=get_field('header_style','option'); 
$hover_style=get_field('hover_style','option'); 
$hover_bg_color=get_field('hover_bg_color','option'); 
$menu_align=get_field('menu_align','option'); 
$logo_column_width=get_field('logo_column_width','option'); 
 
$m_color=get_field('menu_color', 'option'); 
$mh_color=get_field('hover_color', 'option');

$menu_bg=get_field('menu_background_color', 'option');
$header_bg=get_field('header_bg_color', 'option');
$header_bgimg=get_field('header_background', 'option');

$menu_font_weight=get_field('menu_font_weight', 'option');
$menu_item_padding=get_field('menu_item_padding', 'option');
$menu_item_margin=get_field('menu_item_margin', 'option');


$bar_bg_color=get_field('top_bar_bg_color', 'option');
$bar_tx_color=get_field('top_bar_color', 'option');
$topbar_font_size=get_field('topbar_font_size', 'option');
$topbar_font_weight=get_field('topbar_font_weight', 'option');

$bar_text=get_field('bar_left_text', 'option');
 ?>


<style type="text/css">

	#main-menu ul li a{ <?php if ($m_color) { echo "color: ".$m_color.";";} ?><?php if ($menu_font_weight) { echo "font-weight: ".$menu_font_weight.";";} ?><?php if ($menu_item_padding) { echo "padding: 0 ".$menu_item_padding."px;";} ?>}
	#main-menu ul li { <?php if ($menu_item_margin) { echo "margin: 0 ".$menu_item_margin."px;";} ?>}
	.top_bar { <?php if ($bar_bg_color){echo "background-color: ".$bar_bg_color.";";}else{echo "background-color: #ccc;";} ?><?php if ($bar_tx_color){echo "color: ".$bar_tx_color.";";}else{echo "color: #333;";} ?><?php echo "font-size: ".$topbar_font_size."px;"; ?><?php echo "font-weight: ".$topbar_font_weight.";"; ?>}

<?php if ($hover_style=='style1') { ?>	
#main-menu ul li a::after, #main-menu ul li.current-menu-item a::after, #main-menu ul li.current-page-item a::after, #main-menu ul li a:hover::after {
    background-color: <?php if($mh_color){echo $mh_color;}else{echo the_field('skin_color', 'option'); }?>;
}
#main-menu ul li{margin: 0 <?php echo $menu_item_margin;?>px;}#main-menu ul li a{padding: 0 <?php echo $menu_item_padding;?>px;}
<?php }elseif ($hover_style=='style2') {?>	
#main-menu ul li a::after, #main-menu ul li.current-menu-item a::after, #main-menu ul li.current-page-item a::after, #main-menu ul li a:hover::after {
    display: none;
}	
	<?php if ($mh_color) { ?>
		#main-menu ul li a:hover, #main-menu ul li.current-menu-item a, #main-menu ul li.current-menu-item a, #main-menu ul li a.active{ color: <?php echo $mh_color;?> !important;}
	<?php }else{?>
		#main-menu ul li a:hover, #main-menu ul li.current-menu-item a, #main-menu ul li.current-menu-item a, #main-menu ul li a.active{ color: <?php the_field('skin_color', 'option'); ?> !important;}
	<?php } ?>	
<?php }else{?>	
#main-menu ul li a::after, #main-menu ul li.current-menu-item a::after, #main-menu ul li.current-page-item a::after, #main-menu ul li a:hover::after {
    display: none;
}	
	<?php if ($mh_color) { ?>
		#main-menu ul li a:hover, #main-menu ul li.current-menu-item a, #main-menu ul li.current-menu-item a, #main-menu ul li a.active{ background-color: <?php echo $hover_bg_color;?> !important;color: <?php echo $mh_color;?> !important;}
	<?php }?>

<?php } ?>	
</style>

<?php   if( get_field('hideshow_top_bar', 'option')== 'true'): ?>
<!-- NAVBAR
==================================================  -->
	<div  class="top_bar clear">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="<?php the_field('topbar_align', 'option'); ?>">
						<?php if ($bar_text=='Fields') { ?>	
							<p><?php the_field('topbar_left_text', 'option'); ?></p>
							<p><i class="fa <?php the_field('phone-icon', 'option'); ?>" aria-hidden="true"></i><?php the_field('phone_no', 'option'); ?></p>
							<p><i class="fa <?php the_field('mail-icon', 'option'); ?>" aria-hidden="true"></i><?php the_field('email_id', 'option'); ?></p>
						<?php }else{?>
							<?php dynamic_sidebar( 'TopBar Left' ); ?>
						<?php } ?>
					</div>
				</div>
				<?php if( get_field('right_widget', 'option')== 'true'):?>
					<div class="col">
							<?php dynamic_sidebar( 'TopBar Right' ); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div><!-- /.top bar -->
<?php endif; ?>

<!-- NAVBAR
==================================================  -->
<header  class="header fixed">
<?php $logo_type = get_field('logo_type', 'option'); ?>

	<?php if ($header_style=='style1') { ?>	
<!-- New code -->
        <div class="container">
            <div class="header-wrapper clearfix">

            <!-- Logo -->
            <div class="logo">
<?php if( !$logo_type || $logo_type =='imagel'){ ?>		
                <a href="<?php echo get_option('home'); ?>/#home" class="scroll-to">
                	<?php if ($logo) {?>
							<img src="<?php echo $logo; ?>" alt="logo"/>  
					<?php }?>	
                </a>							
<?php }elseif($logo_type =='both'){ ?>
<a href="<?php echo get_option('home'); ?>/#home" class="scroll-to">	
    	<?php if ($logo) {?>
				<img src="<?php echo $logo; ?>" alt="logo"/>  
		<?php }?>
    	<?php the_field('logo_text', 'option');?>
</a>    	
	
<?php }else{ ?>
<a href="<?php echo get_option('home'); ?>/#home" class="scroll-to">	
<span class="fa-stack">
    <i class="fa logo-hex fa-stack-2x"></i>
    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
</span>
    	<?php the_field('logo_text', 'option');?>
</a>    	
	
<?php } ?>

            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation closed clearfix">
                <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
<?php wp_nav_menu( array( 'container_id' => '', 'theme_location' => 'Main_menu','menu_class'=>'sf-menu nav','fallback_cb'=> 'fallbackmenu1' ) ); ?>                
                
            </nav>
            <!-- /Navigation -->

            </div>
        </div>
	<?php } else {?>
		<div class="container">
			<div class="row  text-center style2">					
				<div class="logo col-sm-12">
			<?php if( $logo_type =='imagel'){ ?>		
						<a class="brand" href="<?php echo get_option('home'); ?>">
						 <?php if ($logo) {?>
							<img src="<?php echo $logo; ?>" alt="logo"/>  
						 <?php } ?>						
						</a>							
<?php }else{ ?>
	<h1><a class="brand" href="<?php echo get_option('home'); ?>"><?php the_field('logo_text', 'option');?></a></h1>
<?php } ?>
				</div>	
			</div><!-- /Row -->	
		</div> <!-- /.container -->	
		<div class="fullwidth style2 ">	
				<div id="main-menu" class="m-0 clear <?php  echo 'align'.$menu_align; ?>">
					<div class="container">	

							<?php wp_nav_menu( array( 'container_id' => '', 'theme_location' => 'Main_menu','menu_class'=>'sf-menu','fallback_cb'=> 'fallbackmenu1' ) ); ?>

					</div><!-- /container -->	
				</div><!-- /main-menu -->	
		</div>
					
<style type="text/css">
	<?php if ($header_bg) { ?>
	.navbar-wrapper { background-color: <?php echo $header_bg; ?>;}
	<?php }?>
	<?php if ($menu_bg) { ?>
	 #main-menu { background-color: <?php echo $menu_bg; ?>;}
	<?php }?>
</style>			
	<?php }	?>				
	
</header><!-- /.navbar-wrapper -->
