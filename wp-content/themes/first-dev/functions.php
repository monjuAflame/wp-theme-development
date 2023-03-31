<?php

add_action('after_setup_theme', function(){
    register_nav_menu('main-menu','Main Menu');
    register_nav_menu('footer-menu','Footer Menu');
});

add_filter('',function(){

})


?>