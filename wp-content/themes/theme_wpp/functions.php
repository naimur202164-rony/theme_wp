<?php
// My Functions

// Theme Title

add_theme_support('title-tag');


// Theme css and jquery file calling
function naim_css_js_file_calling(){
  // Linking the the styles
 wp_enqueue_style('naim-style',get_stylesheet_uri( ));
//  adding bootstrap or linking
 wp_register_style('bootstrap',get_template_directory_uri()./css/bootstrap.css,arrey(),'5.3.3','all');
   // Linking the the bootstrap styles
 wp_enqueue_style('naim-style',get_stylesheet_uri( ));
 
}
// Calling the files 
add_action('wp_enqueue_scripts','naim_css_js_file_calling');