<?php 


add_action('after_setup_theme', 'basic_theme_function');

function basic_theme_function(){

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-background', array(
        'default-image'=> get_template_directory_uri() . '/images/background.png'
    ));
    add_theme_support('custom-header', array(
        'default-image'=> get_template_directory_uri() . '/images/anoceanofsky.jpg'
    ));

    load_theme_textdomain('basictheme', get_template_directory().'/languages');

    register_nav_menu('main-menu', __('Main Menu', 'basictheme'));

    register_post_type('basic-testimonials', array(
        'labels' => array(
            'name' => 'Testimonials',
            'add_new_item' => 'Add New Testimonial',
            'view_items' => 'view',
        ),
        'public' => true,
        'menu_icon' => 'dashicons-format-quote',
        'menu_position' => 4,
        'exclude_from_search' => true,
        'supports' => array('title', 'thumbnail', 'revisions')
    ));

}

add_action('wp_enqueue_scripts','basic_theme_styles');

function basic_theme_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(),'','');
}

require_once('custom-menu-walker.php');


// add_action hook - custom

function who_is_hook() {
	echo 'i am function';
}

add_action('i_am_hook', 'who_is_hook');

// add_filter hook
// function new_title($title) {
// 	echo $title;
// }

// add_filter('the_title', 'new_title');

// add filter custom hook
add_filter('new_custom_hook', function($value){
	return 'custom add_filter hook' . $value;
});


// metabox
if (file_exists(dirname(__FILE__) .'/metabox/init.php')) {
    require_once( dirname(__FILE__) .'/metabox/init.php');
}
if (file_exists(dirname(__FILE__) .'/metabox/custom.php')) {
    require_once( dirname(__FILE__) .'/metabox/custom.php');
}


add_action('widgets_init', 'widget_register');

function widget_register(){
    register_sidebar(array(
        'name' => 'Right sidebar',
        'description' => 'this is right sidebar',
        'id' => 'right-sidebar',
        'before_widget' => '<div class="widget_design">',
        'after_widget' => '</div>',
        'before_title'   => '<h2 class="widgettitle">',
        'after_title'    => "</h2>",
        'before_sidebar'=> '<div class="right">',
        'after_sidebar'=> '</div>'
    ));
    register_sidebar(array(
        'name' => 'Left sidebar',
        'description' => 'this is right sidebar',
        'id' => 'left-sidebar',
        'before_widget' => '<div class="widget_design">',
        'after_widget' => '</div>',
        'before_title'   => '<h2 class="widgettitle">',
        'after_title'    => "</h2>",
        'before_sidebar'=> '<div class="right">',
        'after_sidebar'=> '</div>'
    ));
    
}

// shortcode

add_shortcode('shortcode', 'shortcode_function');

function shortcode_function($attributes, $content){

    $attr = shortcode_atts(array(
        'alignment' => "left",
        'color' => "red",
    ), $attributes);

    extract($attr);

    echo "<h1 style='text-align: ".$alignment."; color:".$color.";'> ". $content ." </h1>";
}