<!DOCTYPE html>
<html <?php language_attributes()?>>
<head>
<meta charset="utf-8" />

<?php wp_head() ?>
</head>
<body <?php body_class()?>>
<!-- <ul id="page">
  <li class="topNaviagationLink"><a href="#">Home</a></li>
  <li class="topNaviagationLink"><a href="#">About</a></li>
  <li class="topNaviagationLink"><a href="#">Portfolio</a></li>
  <li class="topNaviagationLink"><a href="#">Services</a></li>
  <li class="topNaviagationLink"><a href="#">Contact</a></li>
</ul> -->

<?php 
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'menu_id' => 'page',
        'walker' => new custom_walker()
    ));
?>