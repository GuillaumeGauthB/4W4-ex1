<?php get_header() ?>
<main class="principal">
    <section class="">
        <?php 	get_sidebar('animation_1'); ?>
    </section>
    <h1 id="formation__h1">----------------front-page--------------------</h1>
    <?php wp_nav_menu(array(
        "menu"=> "menu_accueil",
        "container" => "nav")); ?>
    <h1>---- Front-page.php ------</h1>
   <?php if (have_posts()): the_post(); ?>
        <?php the_title() ?>
        <?php the_content() ?>   
  
   <?php endif ?>
</main>
<?php get_footer() ?>