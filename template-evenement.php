<?php
/**
* Template Name: evenement
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<?php 	get_header() ?>
<main class="site__main">
     <article class="evenement">
          <div>
          <h1>---- page.php HAHAHA ------</h1>
          <?php if (have_posts()): ?>
               <?php 	the_post_thumbnail() ?>
               <p class="evenement__titre"><?php the_title() ?></p>
               <p class="evenement__endroit"><?php 	the_field("endroit") ?></p>
               <p class="evenement__date"><?php 	the_field("date") ?></p>
               <p class="evenement__heure"><?php 	the_field("heure") ?></p>
               <p class="evenement__organisateur"><?php 	the_field("organisateur") ?></p>
               <p class="evenement__resume"><?php 	the_field("resume") ?></p>
          </div>
          <div>
               <img src="<?php 	the_field("image") ?>">
          </div>
               <?php endif ?>
     </article>
</main>
<?php get_footer() ?>



