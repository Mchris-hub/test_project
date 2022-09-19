<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    
<header>
    
    <div class='container'>
    <div class="the_logo">
    <img class="alignnone size-medium wp-image-56" src="http://localhost:8888/wordpress/wp-content/uploads/2022/09/download-2.jpg" alt="" width="200" height="300" />
    </div>
    <?php
      wp_nav_menu(
        array('theme_location' => 'top-menu',
        'menu_class' => 'top-bar'
        )
        );
    ?>
    </div>
    
</header>