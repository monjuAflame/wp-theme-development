<?php 


add_action('after_setup_theme', 'basic_theme_function');

function basic_theme_function(){
    add_theme_support('title-tag');
}


?>