<?php 
$logo_size=get_field('logo_font_size', 'option');
$logo_color=get_field('logo_color', 'option');
$logo_font=get_field('logo_font_family', 'option');
$body_font=get_field('body_text_font_family', 'option');
$h1_font=get_field('h1_font_family', 'option');
$h2_font=get_field('h2_font_family', 'option');
$button_font=get_field('action_button_font_family', 'option');
$menu_font=get_field('menu_font_family', 'option');

$mr_left=get_field('margin_left', 'option');
$mr_right=get_field('margin_right', 'option');
$mr_top=get_field('margin_top', 'option');
$mr_bottom=get_field('margin_bottom', 'option');

$body_font_size=get_field('body_font_size', 'option');
$menu_font_size=get_field('menu_font_size', 'option');
$h1_font_size=get_field('h1_font_size', 'option');
$h2_font_size=get_field('h2_font_size', 'option');

$f_widget_bg=get_field('footer_widget_bar_bg_color', 'option');
$w_title_color=get_field('widget_title_color', 'option');
$bottom_txcolor=get_field('bottom_bar_text_color', 'option');
$widget_columns=get_field('widget_columns', 'option');
$w_title_size=get_field('widget_title_size', 'option');
$w_text_size=get_field('widget_text_size', 'option');

$f_bg_color=get_field('f_background_color', 'option');
$c_text_color=get_field('c_text_color', 'option');
$f_logo_color=get_field('f_logo_color', 'option');
$f_logo_size=get_field('f_logo_font_size', 'option');
$flogo_height=get_field('flogo_height', 'option');

$mr_left2=get_field('margin_left2', 'option');
$mr_right2=get_field('margin_right2', 'option');
$mr_top2=get_field('margin_top2', 'option');
$mr_bottom2=get_field('margin_bottom2', 'option');
?>



<style type="text/css">
#main-menu ul li ul.sub-menu li a:hover, #main-menu ul ul.sub-menu li.current-menu-item a, #main-menu ul ul.sub-menu li.current-menu-item a, #main-menu ul ul li a.active{ color: #ffffff !important;}
#main-menu ul li a {
    font-family: <?php if($menu_font){echo "'".$menu_font."'".', sans-serif !important';} ?> ;
    <?php if($menu_font_size){echo "font-size: ".$menu_font_size."px;";} ?>
}
.logo h1 {
    font-size: <?php if($logo_size){echo $logo_size.'px';} else { echo '50px'; } ?>;
     <?php if($logo_color){echo "color:".$logo_color.";";} ?>
    font-family: <?php if($logo_font){echo "'".$logo_font."'".', sans-serif !important';} ?>;
}   
.brand{<?php if($mr_top){echo "margin:".$mr_top."px ".$mr_right."px ".$mr_bottom."px ".$mr_left."px  !important";} ?>;}

body {
    font-family: <?php if($body_font){echo "'".$body_font."'".', sans-serif !important';} ?> ;
    <?php if($body_font_size){echo "font-size: ".$body_font_size."px;";} ?>
}
h1 {
    <?php if($h1_font=='Coolvetica'){echo 'letter-spacing: 1px;';}  ?>
    font-family: <?php if($h1_font){echo "'".$h1_font."'".', sans-serif !important';} ?> ;
    <?php if($h1_font_size){echo "font-size: ".$h1_font_size."px;";} ?>
}
h2 {
    <?php if($h2_font=='Coolvetica'){echo 'letter-spacing: 1px;';}  ?>
    font-family: <?php if($h2_font){echo "'".$h2_font."'".', sans-serif !important';} ?>;
    <?php if($h2_font_size){echo "font-size: ".$h2_font_size."px;";} ?>
}
.box-data .btnst {
    font-family: <?php if($button_font){echo "'".$button_font."'".', sans-serif !important';} ?> ;
}
#TopBanner .bigtitle h1, .topbanner .bigtitle h1{
    <?php if($h1_font=='Coolvetica'){echo 'letter-spacing: 3px;';}  ?>
}
.footer_col {
    <?php if($f_widget_bg){echo "background-color: ".$f_widget_bg.";";} ?>
    padding-top: <?php the_field('widget_bar_padding_top', 'option'); ?>px ;
    padding-bottom: <?php the_field('widget_bar_padding_below', 'option'); ?>px;
}
.copyright {
    <?php if($f_bg_color){echo "background-color: ".$f_bg_color.";";} ?>
    padding: <?php the_field('copyright_font_size', 'option'); ?>px 0;
}
.copy > p {
    <?php if($c_text_color){echo "color: ".$c_text_color.";";} ?>
    font-size: <?php the_field('copyright_font_size', 'option'); ?>px;
}
.column_inner > div h4 {
    <?php if($w_title_color){echo "color: ".$w_title_color.";";} ?>
    <?php if($w_title_size){echo "font-size: ".$w_title_size."px;";} ?>
}
.f_widget li a,.f_widget p {
    <?php if($bottom_txcolor){echo "color: ".$bottom_txcolor.";";} ?>
    <?php if($w_text_size){echo "font-size: ".$w_text_size."px;";} ?>
}
.fimg h2{<?php if($mr_top){echo "margin:".$mr_top2."px ".$mr_right2."px ".$mr_bottom2."px ".$mr_left2."px  !important";} ?>;<?php if($f_logo_color){echo "color: ".$f_logo_color.";";} ?><?php if($f_logo_size){echo "font-size: ".$f_logo_size."px;";} ?>}
.fimg h2 img {
    <?php if($flogo_height){echo "max-height: ".$flogo_height."px;";} ?>
    width: auto;
}


.thumb {
    position: relative;
}   
.clickhere {
    border-radius: 5px;
    display: inline-block;
    font-weight: 600;
    margin-top: 10px;
    padding: 13px 40px;
    text-decoration: none;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
    text-transform: uppercase;
}
.clickhere {
    font-size: 20px;
}
.btn.clickhere {
    position: absolute;
    bottom: 7vw;
    left: 50%;
    margin-left: -104px;
}

</style>



 <?php if (get_field('skin_color', 'option')){ 
     $m_color=get_field('menu_color', 'option');
     $mh_color=get_field('hover_color', 'option');
 	?>
 <style type="text/css">	
.box-data h1 strong,.box-data h1 span {
    color: <?php the_field('skin_color', 'option'); ?>;
}
.box-data .btnst,.box-data p[style] > a {
    background: <?php if (get_field('action_button_color', 'option')){ the_field('action_button_color', 'option');}else{ the_field('skin_color', 'option');} ?>;
}
.contact-form input[type="submit"],.sub_form input[type="submit"], .submit  {
    background: <?php if (get_field('submit_button_color', 'option')){ the_field('submit_button_color', 'option');}else{ the_field('skin_color', 'option');} ?> !important;
} 
h1, h2 {
    color: <?php the_field('skin_color', 'option'); ?>;
}
.ins_access.s2 a {
    color: <?php the_field('skin_color', 'option'); ?>;
}
.overdata  h3 span::before {
    color: <?php the_field('skin_color', 'option'); ?>;
    display: block;
}
.overdata img {
    display: none;
}
.toplink {    
    background-color: <?php the_field('skin_color', 'option'); ?>;
}
.slicknav_menu {
    background-color: #111 /*<?php// the_field('skin_color', 'option'); ?>*/;
}
.slicknav_menu .slicknav_nav a{ 
	color: <?php if($m_color){echo $m_color;}  ?> !important;
}
.list ul li, .box-data ul li {
    background: none;
    position: relative;
}
.list ul li::before, .box-data ul li::before {
    display: block;
    font-family: icomoon;
    content: '\e900';
    position: absolute;
    left: 3px;
    font-size: 17px;
    color: <?php the_field('skin_color', 'option'); ?>;
}
 </style>   
<?php } ?>