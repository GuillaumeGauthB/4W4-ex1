<?php get_header(); ?>
<main class="article">
  <h2 class="article__titre">Liste des cours</h2>
  <?php if (have_posts()):
            while (have_posts()):the_post();?>
            <section class="carte">
              <h3 class="carte__titre"><?php the_title(); ?></h3>
              <p class="carte__contenu"><?php 	the_excerpt(); ?></p>
            </section>
          <?php endwhile; ?>
        <?php endif; ?>
</main>
<?php get_footer(); ?>
