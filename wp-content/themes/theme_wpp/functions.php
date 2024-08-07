<?php
// My Functions




// Theme Title

add_theme_support('title-tag');


// Theme css and jquery file calling


function naim_css_js_file_calling(){
 wp_enqueue_style('naim-style',get_stylesheet_uri( ));
}

add_action('wp_enqueue_scripts','naim_css_js_file_calling');