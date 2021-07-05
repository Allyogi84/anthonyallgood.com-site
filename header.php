<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<html class="no-js">
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8" /> 

    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?php the_field( 'keywords', 'option' ); ?> " />
    <meta name="description" content="<?php the_field( 'description', 'option' ); ?> " />
	<meta name="author" content="Shaid Islam" />

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title><?php
	/*************************************************
	###	title tags
	*************************************************/
	?>
	<?php  	 $title= get_bloginfo('name');	 ?>

	<?php if ( is_front_page() ) {  echo $title;  } ?>

	<?php if ( is_search() ) { _e("Search Results"); ?> | <?php echo $title; ?><?php } ?>

	<?php if ( is_author() ) { _e("Author Archives");?> | <?php echo $title; ?><?php } ?>

	<?php if ( is_404() ) { _e("Page Not Found "); ?>| <?php echo $title; ?><?php } ?>

	<?php if ( is_single() ) { ?><?php wp_title('');  } ?>

	<?php if ( is_page() ) { ?><?php wp_title(''); } ?>

	<?php if ( is_category() ) { ?><?php single_cat_title(); ?> | <?php bloginfo('name'); ?><?php } ?>

	<?php if ( taxonomy_exists('portfolio_category') ) { ?><?php single_cat_title(); ?>| <?php bloginfo('name'); ?><?php } ?>

	<?php if ( is_month() ) { ?><?php the_time('F'); ?> | <?php bloginfo('name'); ?><?php } ?>

	<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?>| Tag Archive | <?php single_tag_title("", true); } } ?>
 <?php if(ewstheme_is_wc()): ?>  
	<?php if ( is_woocommerce() ) { _e("Shop"); ?> | <?php echo $title; ?><?php } ?>
<?php  endif;  ?>  	
	</title>
	
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

 
<!-- ==============================================
        Favicons
        =============================================== -->

        <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/assets/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/vendor/gallery.min.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/vendor/animation.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/default.css">
<?php if (  is_page_template( 'homepage.php' ) ) {?>        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/theme-dark.css">
<?php }?>         
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/theme-elegant.css">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/theme-<?php  echo get_field('skin_color', 'option'); ?>.css">

        <!-- ==============================================
        Section Configuration
        =============================================== -->
        <style>
            :root {
                --section-1-bg-color: #040402;
                --section-2-bg-color: #040402;
                --section-3-bg-color: #040402;
                --section-4-bg-color: #040402;
                --section-5-bg-color: #040402;
                --section-6-bg-color: #040402;
                --section-7-bg-color: #040402;
                --section-8-bg-color: #040402;
                --section-9-bg-color: #040402;
                --section-10-bg-color: #111111;
                --section-11-bg-color: #040402;
                --section-12-bg-color: #111111;
                --section-13-bg-color: #040402;

                --footer-1-bg-color: #040402;
                --footer-2-bg-color: #111111;
            }
        </style>  
<?php if (  !is_page_template( 'homepage.php' ) ) {?>     
        <style>
            :root {
                --primary-bg-color: #f5f5f5;          
                --primary-t-color: #2f323a;
                --secondary-bg-color: #eee;    
                --nav-item-color: #f5f5f5; 
                --header-bg-color: #2f323a;
--primary-bg-color-2: #eeeeee;
--primary-bg-color-3: #e5e5e5;

                --section-1-bg-color: #f5f5f5;
                --section-2-bg-color: #111111;
                --section-3-bg-color: #f5f5f5;
                --section-4-bg-color: #f5f5f5;
                --section-5-bg-color: #f5f5f5;
            
                --footer-1-bg-color: #111111;
                --footer-2-bg-color: #040402;
            }
        </style>
<?php }?> 

<?php 
$fav = get_field('favicon', 'option');
$templateDir = get_bloginfo('stylesheet_directory');

 if (get_field('logo', 'option')):
	$logo = get_field('logo', 'option');
	 else : 
	 	$logo= get_bloginfo('stylesheet_directory').'/images/logo.png';  
	 endif; 

 if (get_field('sticky_logo', 'option')):
	$sticky_logo = get_field('sticky_logo', 'option');
	 else : 
	 	$sticky_logo= $logo;  
	 endif; 
?> 


<script>
	var templateDir = "<?php bloginfo('stylesheet_directory'); ?>";
	var homeDir = "<?php  echo get_option('home'); ?>";
	var postnum = "<?php  echo get_field('number_post'); ?>";
	var logoimg = "<?php echo $logo; ?>";	
	var logost = "<?php echo $sticky_logo; ?>";
   
	
</script>
<?php wp_head(); ?> 	
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<!-- Favicons -->
<?php  if ($fav): ?><link rel="shortcut icon" href="<?php echo $fav; ?>" /><?php else : ?><link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" /><?php endif; ?>

<!-- Skin Settings -->	
<?php //include 'skin.php'; ?>	

<style type="text/css"><?php the_field('custom_css','option'); ?></style>
<script type="text/javascript">
	<?php the_field('custom_js','option'); ?>
</script>

<?php the_field('fb_custom_js','option'); ?>

</head>
  
<?php if (  is_page_template( 'homepage.php' ) ) {?>
	  <body class="">
<?php } else {?>
	  <body class=""> <!-- inner -->
<?php } ?>

        




        <!-- Header -->
        <header>

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container header">.
            <!-- Navbar Brand-->
<?php $logo_type = get_field('logo_type', 'option'); ?>
<?php if( !$logo_type || $logo_type =='imagel'){ ?>     
                <a href="<?php echo get_option('home'); ?>/#top" class="navbar-brand nbc-logo">
                    <?php if ($logo) {?>
                            <img src="<?php echo $logo; ?>" width="80" height="27" alt="logo"/>  
                    <?php }?>   
                </a>                            
<?php }elseif($logo_type =='both'){ ?>
<a href="<?php echo get_option('home'); ?>/#home" class="navbar-brand nbc-logo"> 
        <?php if ($logo) {?>
                <img src="<?php echo $logo; ?>" alt="logo"/>  
        <?php }?>
        <?php the_field('logo_text', 'option');?><i>.</i>
</a>        
    
<?php }else{ ?>
<a href="<?php echo get_option('home'); ?>/#home" class="navbar-brand nbc-logo"> 
<!-- <span class="fa-stack">
    <i class="fa logo-hex fa-stack-2x"></i>
    <i class="fa logo-fa fa-map-marker fa-stack-1x"></i>
</span> -->
        <?php the_field('logo_text', 'option');?><i>.</i>
</a>        
    
<?php } ?> 



  

        <?php
        wp_nav_menu( array(
            'theme_location'    => 'Main_menu',
            'depth'             => 2,
            'container'         => false,
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'navbar-nav items ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

                    <!-- Navbar Icons-->
                    <ul class="navbar-nav icons ml-auto m-xl-0">
<?php 
$facebookl_link=get_field('facebook_link', 'option');
$instagram_link=get_field('instagram_link', 'option');
$github_link=get_field('github_link', 'option');
$linkedin_link=get_field('linkedin_link', 'option');


?>                        
 <!--                   <li class="nav-item">
                            <a href="#" class="nav-link effect-motion-hover" data-toggle="modal" data-target="#search">
                                <i class="icon-magnifier"></i>
                            </a>
                        </li> -->
                        <?php if($facebookl_link){?><li class="nav-item social">
                            <a href="<?php echo $facebookl_link;?>" class="nav-link effect-motion-hover"><i class="icon-social-facebook"></i></a>
                        </li><?php }?>
                        <?php if($instagram_link){?><li class="nav-item social">
                            <a href="<?php echo $instagram_link;?>" class="nav-link effect-motion-hover"><i class="icon-social-instagram"></i></a>
                        </li><?php }?>
                        <?php if($github_link){?><li class="nav-item social">
                            <a href="<?php echo $github_link;?>" class="nav-link effect-motion-hover"><i class="icon-social-github"></i></a>
                        </li> <?php }?>
                        <?php if($linkedin_link){?><li class="nav-item social">
                            <a href="<?php echo $linkedin_link;?>" class="nav-link effect-motion-hover"><i class="icon-social-linkedin"></i></a>
                        </li> <?php }?>                   
                    </ul>

                    <!-- Navbar Toggle-->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-grid m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action-->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="<?php  echo get_option('home'); ?>/#contact" target="" class="btn ml-lg-auto primary-button"><i class="icon-rocket"></i>CONTACT</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>


