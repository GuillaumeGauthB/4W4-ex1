<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 	wp_head(); ?>
</head>
<body <?php 	body_class("site") ?>>

<header class="entete">
    <h1 class="entete_principal"><?php echo	get_bloginfo('name') ?></h1>
    <h2><?php echo	get_bloginfo('description') ?></h2>    
</header>