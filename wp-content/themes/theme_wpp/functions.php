<?php
// My Functions


// Theme Title

add_theme_support('title-tag');

// Theme css and jquery file calling
function naim_css_js_file_calling(){
  // ALL CSS STYLE LINKING 
 wp_enqueue_style('naim-style',get_stylesheet_uri( ));

  wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.3', 'all');
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');

 wp_enqueue_style('bootstrap',get_stylesheet_uri( ));
 wp_enqueue_style('custom',get_stylesheet_uri( ));


//  JQUERY CALLING WITH CUSTOMS JS
   wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array(),'5.3.3','');
   wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array(),'1.0.0','');

}
// Calling the files 
add_action('wp_enqueue_scripts','naim_css_js_file_calling');



// Theme Functions

function naim_customizar_registar($wp_customize){
   $wp_customize->add_section('naimur_header_area',array(
      'title' =>__('Header Area','naimurTheme'),
      'description' => 'if you intersted to update your logo you can'
   ));
   $wp_customize->add_setting('naimur-logo',array(
     'default'=>get_bloginfo('template-directory').'./img/logo.png',

   ));

   
}

add_action('customize_registar','naim_customizar_registar');