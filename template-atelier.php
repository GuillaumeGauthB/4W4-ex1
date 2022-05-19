<?php
/**
* Template Name: atelier
*
* @package WordPress
* @subpackage cidw-4w4
*/
?>

<?php 	get_header() ?>
<main class="site__main">
     <h1>Atelier</h1>
     <article class="atelier">
          <div>
          <?php if (have_posts()): ?>
               <h2 class="atelier__titre"><?php the_title() ?></h2>
               <p>Informations pertinentes</p>
               <div class="atelier__container">
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("animateur") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("date_fin") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("jours_de_semaine") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("heure_debut") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("heure_fin") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("duree_dune_seance") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("local") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("date_debut") ?></p>
                    <p class="atelier__container__animateur">Animateur: <?php 	the_field("description") ?></p>
               </div>
          </div>
          <div>
          </div>
               <?php endif ?>
     </article>
</main>
<?php get_footer() ?>



