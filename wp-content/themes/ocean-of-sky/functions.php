<?php 


add_action('after_setup_theme', 'basic_theme_function');

function basic_theme_function(){

    add_theme_support('title-tag');
    add_theme_support('custom-background', array(
        'default-image'=> get_template_directory_uri() . '/images/background.png'
    ));
    add_theme_support('custom-header', array(
        'default-image'=> get_template_directory_uri() . '/images/anoceanofsky.jpg'
    ));

    load_theme_textdomain('basictheme', get_template_directory().'/languages');

    register_nav_menu('main-menu', __('Main Menu', 'basictheme'));

}

add_action('wp_enqueue_scripts','basic_theme_styles');

function basic_theme_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(),'','');
}

require_once('custom-menu-walker.php');




function who_is_hook() {
	echo 'i am function';
}

add_action('i_am_hook', 'who_is_hook');










?>