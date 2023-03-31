<?php

add_action('after_setup_theme', function(){
    register_nav_menu('main-menu','Main Menu');
    register_nav_menu('footer-menu','Footer Menu');
    add_theme_support('custom-header', array(
        'default-image' => get_template_directory_uri() . '/images/a.jpg'
    ));
    add_theme_support('custom-background');
});

add_filter('',function(){

})


?>