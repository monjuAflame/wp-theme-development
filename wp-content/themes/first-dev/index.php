<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class() ?> >
    <h1>Hello World</h1>

    <img src="<?php header_image() ?>" alt="">

    <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu'
        ))
    ?>

</body>
</html>