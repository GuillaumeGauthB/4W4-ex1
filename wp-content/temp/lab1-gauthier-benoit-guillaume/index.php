<?php get_header();  ?>
<main>
    <h1>Accueil</h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post();?>
            <h2><?php the_title(); ?></h2>
        <?php endwhile; ?>

    <?php endif; ?>
</main>
<?php get_footer(); ?>
</body>
</html>
