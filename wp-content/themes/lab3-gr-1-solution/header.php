<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class("site"); ?> >
<header class="site__header">
    <h1 class="header__principal"><?php echo get_bloginfo( 'name'); ?></h1>
    <h2 class="header__secondaire"><?php echo get_bloginfo( 'description'); ?></h2>
</header>
<section class="site__barre">
    <!-- <nav>
        <a href="#">choix 1</a><a href="#">choix 2</a><a href="#">choix 3</a><a href="#">choix 4</a><a href="#">choix 5</a><a href="#">choix 6</a><a href="#">choix 7</a><a href="#">choix 8</a><a href="#">choix 9</a><a href="#">choix 10</a>
    </nav> -->
<?php 	wp_nav_menu(array("menu" => "principal")); ?>
</section>    
