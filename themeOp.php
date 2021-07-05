<?php 

// START LICENSE

define('YOUR_LICENSE_SERVER_URL', 'http://healththemecontroller.live/ewslicense'); //Rename this constant name so it is specific to your plugin or theme.


//////////////////////////////////////////////////////////////////////////////////////
/*** Verify license key is active ***/
    $api_params = array(
        'slm_action' => 'slm_check',

        'secret_key' => '5b6ab78be6a274.96601867',

        'license_key' => get_option('sample_license_key'), //replace with your license key field name.

    );
    // Send query to the license manager server
    $response = wp_remote_get(add_query_arg($api_params, YOUR_LICENSE_SERVER_URL), array('timeout' => 20, 'sslverify' => false));

    $license_data = json_decode(wp_remote_retrieve_body($response));
    global $active, $message;
    if($license_data->result == 'success'){ 

//require_once 'libs/acfOption.php';

   }else{ 
 function general_admin_notice(){

          echo '<div class="notice notice-warning is-dismissible">
              <p>Please Contact with Developer Skype:Shaid85 for license key. <a href="../wp-admin/options-general.php?page=slm-sample-plugin.php">Go</a></p>
          </div>';
 }

   add_action('admin_notices', 'general_admin_notice');

        } /*End License*/

        


 //Initialize the update checker.
require 'theme-updates/theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
    get_template(),
    'http://healththemecontroller.live/ewslicense/libs/info.json'
);



add_filter( 'auto_update_theme', '__return_true' );

 function admin_js() {

 ?>

<script type="text/javascript">
jQuery(document).ready(function() {

    jQuery(".acf-field[data-name='save_changes'] label").click(function() { 
        jQuery("#publish").trigger("click");
    });

// Start Hide Function
	function openRM() {
          jQuery( '#postdivrich' ).removeClass( 'show');
          jQuery( '#postdivrich' ).addClass( 'hide');

          jQuery( '#acf-group_5be8821174855' ).removeClass( 'hide');
		  jQuery( '#acf-group_5be8821174855' ).addClass( 'show');
jQuery( '#acf_after_title-sortables' ).removeClass( 'c_grey');           
	  
	}

	function closeRM() {	
			jQuery( '#acf-group_5be8821174855' ).addClass( 'hide');
			jQuery( '#acf-group_5be8821174855' ).removeClass( 'show');

          jQuery( '#postdivrich' ).removeClass( 'hide');
          jQuery( '#postdivrich' ).addClass( 'show');            
jQuery( '#acf_after_title-sortables' ).addClass( 'c_grey');            
	}

	if(jQuery('#selecteditor .acf-button-group label:last-child').hasClass('selected')){
			 openRM();
			  isOpen = true;
			  alert('Please Disable Advance Options to go Normal Mood')
	}else{
			closeRM();
			  isOpen = false;
	}
	
	jQuery( '#selecteditor .acf-button-group label:first-child' ).click( function() {		   
		      closeRM();
              isOpen = false;
		});
    jQuery( '#selecteditor .acf-button-group label:last-child' ).click( function() {           
              openRM();
              isOpen = true;  
        });


// End Advanced Hide Function

// WordPress Editor Hide Function
    function openRM2() {
          jQuery( '#postdivrich.wp-editor-expand' ).removeClass( 'hide'); 

    }

    function closeRM2() {    
            jQuery( '#postdivrich.wp-editor-expand' ).addClass( 'hide');

    }


if(jQuery(".acf-field[data-name='wp_content_editor']").hasClass('show_content')){

    if(jQuery('.show_content .acf-switch').hasClass('-on')){
             openRM2();
              isOpen2 = true;
            
    }else{
            closeRM2();
              isOpen2 = false;
    }
    
};    

    jQuery( '.show_content .acf-switch' ).click( function() {          

        if( !isOpen2 ) {
             openRM2();
              isOpen2 = true;
        } else {
            closeRM2();
              isOpen2 = false;
        }
    }); 
// END WordPress Editor Hide Function    



var sharebox = ".jpn-acf-tabs .nav ul";
var menuYloc = -220;

  //menuYloc = jQuery(window).height();
jQuery(window).scroll(function () { 
 if (jQuery(this).scrollTop() > 200) {    
jQuery('.jpn-acf-tabs .nav ul').addClass('fixed'); 
}else{jQuery('.jpn-acf-tabs .nav ul').removeClass('fixed');}

  offset = menuYloc+jQuery(document).scrollTop()+"px";
  jQuery(sharebox).animate({top:offset},{duration:300,queue:false});
});



});	
</script>


<?php }

add_action('admin_head', 'admin_js');

function admin_css() {

 ?>

<style type="text/css">
.hndle.ui-sortable-handle {
    color: #920000;
    font-size: 16px !important;
}
.acf-field.acf-field-message {
    color: #007276;
    padding: 10px 0 10px;
}
.acf-field-message .acf-label {
    margin: 0;
    padding: 0 10px;
    border: 1px solid;
    background-color: #dcf0f0;
}
.acf-field-message .acf-label label {
    margin: 0;
    padding: 5px 0;
}
.acf-field-message.subt .acf-label {
    border: none;
}
.hide {
    display: none;
}
.icon_preview {
    display: none;
}
.hide_section {
    float: right !important;
}
#selecteditor::before {
    width: 100%;
    height: 43px;
    content: "";
    position: absolute;
    top: -43px;
    background-color: transparent;
}
.acf-row-handle.order span {
    color: #fff;
    padding: 3px 3px 5px 3px;
    line-height: 15px;
    display: block;
    text-shadow: 1px 1px 1px #000;
    background-color: rgba(0,0,0,0.2);
    border-radius: 5px;
}
.repeaterbox .c_title label {
    font-size: 16px;
}
.acf-field-flexible-content .acf-label label {
    display: none;
}
.column_width .acf-button-group label {
    padding: 5px 7px;
}
.c_settings .acf-switch span {
    padding: 4px 8px;
}
.section_name .acf-input input {
    border-color: #ddd;
    color: #309CF3;
    font-weight: 600;
    font-size: 20px;
    background-color: #ddd;
    height: 48px;
}
.repeaterbox {
    /*background-color: #dfdfdf;*/
}
.rep_column {
    background: #c6e6f3;
}
td.acf-fields,td.acf-row-handle.order,td.acf-row-handle.remove {
    border-top-color: #23B027 !important;
}
.repeaterbox > .acf-input > .acf-repeater td.acf-fields,.repeaterbox > .acf-input > .acf-repeater td.acf-row-handle.order,.repeaterbox > .acf-input > .acf-repeater td.acf-row-handle.remove {
    /*background-color: #f0e0e0;*/
}
.rep_column > .acf-input > .acf-repeater td.acf-fields,.rep_column > .acf-input > .acf-repeater td.acf-row-handle.order,.rep_column > .acf-input > .acf-repeater td.acf-row-handle.remove {
    background-color: #fff;
}
.repeaterbox > .acf-input > .acf-repeater tr td.acf-row-handle.order{
    background-color: #007276;
}
.repeaterbox > .acf-input > .acf-repeater tr:nth-child(2n) td.acf-row-handle.order{
    background-color: #055053;
}
.rep_column > .acf-input > .acf-repeater td.acf-row-handle.order{
    background-color: #b6b6b6 !important;
}
.rep_column > .acf-input > .acf-repeater tr:nth-child(2n) td.acf-row-handle.order{
    background-color: #919393 !important;
}

#acf-group_5bf31f7ba7099 h2,#acf-group_5bf31f7ba7099 .acf-field .acf-label label {
    display: none;
}

/*.jpn-tabs-activated.jpn-horizontal > .jpn-acf-tabs > .nav > ul > li {
    height: 30px;
    margin-right: 2px;
    width: auto;
}
.jpn-tab-hover {
    display: none;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab.active::after {
    display: none;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab.active {
    color: #ffffff;
    background: #007276;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab, .jpn-tabs-activated > .jpn-acf-tabs > .add > ul > li > .acf-button, .jpn-tabs-activated > .jpn-acf-tabs > .add > ul > li > .jpn-remove-row {
    color: #ffffff;
    padding: 0 8px;
    width: 100%;
    text-align: center;
    background: #000;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab > span {
    background: none;
    color: #fff;
    text-align: center;
    font-size: 12px;
    position: relative;
    top: 0;
    font-weight: 500;
    left: 0;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab.active {
    border-bottom: inherit;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab.active > span {
    color: inherit;
    background: none;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab:hover {
    background: #333;
}
/*.jpn-tab-button.acf-button {
    display: none !important;
}
.jpn-tab-button.jpn-remove-row {
    display: none !important;
}*/

.acf-field-repeater.hide .acf-actions {
    display: none;
}
.acf-field-repeater.hide .acf-field[data-name="add_slide_image"] .acf-actions,.acf-field-repeater.hide .acf-field[data-name="add_testimonial"] .acf-actions,.acf-field-repeater.hide .acf-field[data-name="add_accordion"] .acf-actions,.acf-field-repeater.hide .acf-field[data-name="faq_option"] .acf-actions,.acf-field-repeater.hide .acf-field[data-name="add_grid"] .acf-actions {
    display: block; !important;
}
.acf-field-repeater.hide .acf-fc-layout-controlls {
    display: none;
}
.acf-field-repeater.hide .layout[data-layout="accordion_grid"] .acf-fc-layout-controlls,.acf-field-repeater.hide .layout[data-layout="slide_image"] .acf-fc-layout-controlls,.acf-field-repeater.hide .layout[data-layout="3_column_grid"] .acf-fc-layout-controlls,.acf-field-repeater.hide .layout[data-layout="add_testimonial"] .acf-fc-layout-controlls {
    display: block !important;
}
.acf-field-repeater.hide .layout[data-layout="accordion_grid"] .acf-fc-layout-handle,.acf-field-repeater.hide .layout[data-layout="slide_image"] .acf-fc-layout-handle,.acf-field-repeater.hide .layout[data-layout="3_column_grid"] .acf-fc-layout-handle,.acf-field-repeater.hide .layout[data-layout="add_testimonial"] .acf-fc-layout-handle {
    display: block !important;
}
.acf-field-repeater.hide .acf-row-handle  a{
    display: none !important;
}
/*Hide some advanced field*/
.acf-field-repeater.hide .acf-field[data-name="section_name"],.acf-field-repeater.hide .acf-field[data-name="background_type"],.acf-field-repeater.hide .acf-field[data-name="padding_up"],.acf-field-repeater.hide .acf-field[data-name="padding_down"],.acf-field-repeater.hide .acf-field[data-name="margin_up_left_col"],.acf-field-repeater.hide .acf-field[data-name="margin_up_right_col"],.acf-field-repeater.hide .acf-field[data-name="section_class"],.acf-field-repeater.hide .acf-field[data-name="class_on_row2"],.acf-field-repeater.hide .acf-field[data-name="column_width_ratio"],.acf-field-repeater.hide .acf-field[data-name="fullwidth"],.acf-field-repeater.hide .acf-field[data-name="class_col"]{
    display: none !important;
}
.acf-field-repeater .acf-field[data-name="class_left_col"],
.acf-field-repeater .acf-field[data-name="class_right_col"],
.acf-field-repeater .acf-field[data-name="class_on_row"]{
    display: none !important;
}
#advance2 {
    z-index: 9999;
}

.jpn-tabs-activated > .acf-repeater > .acf-table {
    border: #007276 solid 2px;
    position: relative;
}
.jpn-tabs-activated > .jpn-acf-tabs > .nav > ul > li > .jpn-acf-tab {
    border-bottom: 1px solid #000;
    position: relative;
}


#poststuff .stuffbox > h3, #poststuff h2, #poststuff h3.hndle {
    font-size: 16px;
    line-height: 1.6;
    background-color: #007276;
    color: #fff;
}
#adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top {
    background-color: #007276;
}
.wp-core-ui .button, .wp-core-ui .button-secondary {
    border-color: #007276;
    border-width: 1px;
    background: transparent;
    box-shadow: 0 1px 0 #007276;
    vertical-align: top;
    color: #007276;
    font-weight: 500;
}
.wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover, .wp-core-ui .button-primary {
    background-color: #007276;
    box-shadow: 0 1px 0 #007276;
    text-shadow: none;
    border-color: #007276;
    color: #fff;
}
.accordion-section-title::after, .handlediv, .item-edit, .postbox .handlediv.button-link, .toggle-indicator:focus {
    outline: none;
}
.accordion-section-title::after, .handlediv, .item-edit, .postbox .handlediv.button-link, .toggle-indicator {
    color: #fff;
}
.jpn-tabs-activated.jpn-horizontal > .jpn-acf-tabs::after {
    display: none;
}
.acf-field[data-name="save_changes"] .acf-button-group {
    display: block;
    text-align: center;
}
.acf-field[data-name="save_changes"] .acf-input label {
    background-color: #055053;
    padding: 35px 50px;
    font-size: 40px;
    margin: 20px auto;
    border: none;
    text-shadow: 2px 2px 3px #333;
}
.jpn-tabs-activated.jpn-vertical {
    padding-left: 110px;
    position: relative;
}
.jpn-tabs-activated.jpn-vertical > .jpn-acf-tabs > .nav > ul, .jpn-tabs-activated > .jpn-acf-tabs > .add > ul {
    width: 110px;
}
.acf-field-repeater.hide .acf-row-handle.remove {
    width: 0;
    padding: 0;
}
#advance2.hide {
    display: none;
}
.acf-field-flexible-content > .acf-label {
    display: block;
}
.acf-field-flexible-content .acf-fc-layout-handle {

}
.acf-field[data-name="card_box_class"]{
display:none;
}
.hide .acf-flexible-content .layout .acf-fc-layout-handle {
    display: none;
}
.acf-field.sub_t {
    color: #007276;
    padding: 15px 0 15px;
}
.acf-field.acf-field-message.c_title {
    color: #007276;
    padding: 20px 12px 10px;
}
.acf-field-message.c_title label,.acf-field-message.sub_t label {
    padding: 8px 8px 8px 0px !important;
    display: inline-block;
}
.acf-field-message.sub_t .acf-label {
    margin: 0;
    padding: 0 15px;
    border: 1px solid;
    background-color: #dcf0f0;
}
.acf-field-message.sub_t label {
    font-size: 16px;
    font-weight: 600 !important;
}
.acf-field-message.m_st {
    background-color: #f0f0f0;
    color: #000;
    border-left: 3px solid #00A2E8 !important;
    padding: 23px 15px !important;
    margin-top: 60px !important;
}
.acf-field-message.m_st label {
    font-size: 18px;
    font-weight: 600 !important;
}
.acf-field-message .acf-input p {
    display: none;
}
#acf_after_title-sortables .acf-postbox h2 {
    background-color: #149b9b;
    color: #fff;
    padding: 8px 12px;
}
#acf_after_title-sortables.c_grey .acf-postbox h2 {
    background-color: #3f607a;
}
#acf-group_5be8821174855 .hndle.ui-sortable-handle {
    background-color: #007276;
} 
.acf-field-message .acf-label {
    margin: 0;
}
#postdivrich.wp-editor-expand.hide {
    display: none;
}
.acf-range-wrap input[type="range"] {
    width: 100%;
}
.show .acf-field.acf-field-flexible-content.acf-field-5a3858da66609 {
    background-color: #76AFBC;
}
.jpn-tabs-activated > .acf-repeater > table > tbody > tr.acf-row:not([data-jpn-tab-id]) {
    display: block;
    border: 2px solid #0f2;
    margin-top: 20px;
}
.acf-repeater .acf-row-handle .acf-icon.-minus {
    top: 50%;
    background-color: #f95;
    color: #000;
}
.jpn-acf-tabs .nav ul {
    position: static !important;
}
.jpn-acf-tabs .nav ul.fixed {
    position: absolute !important;
    z-index: 99;
}
.acf-field-repeater .acf-field[data-name="section_name"] input::-moz-placeholder{
    color: #099519;
}
/*.acf-field.acf-field-flexible-content.acf-field-5a3858da66609 {
    display: none;
}*/
.first_fx > .acf-input > .acf-flexible-content > .values > .layout {
    border-color: #f7ac66 !important;
}
.acf-flexible-content > .values > .layout  {
    border-color: #ccc !important;
}
.acf-field[data-name="client_logo"] .acf-image-uploader .image-wrap img {
    background-color: #4270B7;
}
.acf-field.acf-field-image.colorbg .image-wrap img {
    background-color: #4270B7;
}
</style>


<?php }

add_action('admin_head', 'admin_css');

//require_once  'libs/site_options.php'; 
//require_once  'libs/default_page.php'; 

?>