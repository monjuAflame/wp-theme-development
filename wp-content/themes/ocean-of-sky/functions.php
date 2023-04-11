<?php 


add_action('after_setup_theme', 'basic_theme_function');

function basic_theme_function(){
    add_theme_support('title-tag');
}

add_action('wp_enqueue_scripts','basic_theme_styles');

function basic_theme_styles() {
    wp_enqueue_style('style', get_template_directory_uri() . 'style.css','','');
    or
    wp_enqueue_style('style', get_stylesheet_uri(),'','');
}



?>