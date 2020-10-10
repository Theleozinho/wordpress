<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">
    <title><?php bloginfo('name') | bloginfo('description');?></title>
    <script src="https://kit.fontawesome.com/11a8eb6726.js" crossorigin="anonymous"></script>

</head>
<body>
    
<header>
    <nav>
        <span class="logo-box">
        <a href="<?php echo get_home_url(); ?>"> 
            <img src="<?php bloginfo('template_url');?>/img/logo_test/branco-logo.png" class="logo">
        </a>
         
            <button class="ico-menu"><i class="fas fa-bars"></i></button>
        </span>

        
   
        <?php 
                wp_nav_menu(
                    array(
                        'theme_location' => 'header',
                        'container' => "ul",
                        'menu_class' => 'menu-mobile menu',
                    )
                )
            ?>
    </nav>
    
</header>