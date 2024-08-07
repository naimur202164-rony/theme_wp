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



// Google font enqueue

function naimur_add_google_fonts(){
   wp_enqueue_style('naimur_google_fonts','https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap',false);
}
add_action('wp_enqueue_scripts', 'naimur_add_google_fonts');


// Theme Functions

//Theme Function
function naimur_customizar_register($wp_customize){
  $wp_customize->add_section('naimur_header_area', array(
    'title' =>__('Header Area', 'naimurTheme'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('naimur_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'naimur_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'naimur_logo',
    'section' => 'naimur_header_area',
  ) ));

}

add_action('customize_register', 'naimur_customizar_register');