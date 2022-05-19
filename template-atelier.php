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
     <article class="atelier">
          <div>
          <?php if (have_posts()): ?>
               <h1 class="atelier atelier__titre"><span class="texte__atelier"><?php the_title() ?></span></h1>
               <p class="atelier atelier__description">Description: <span class="texte__atelier"><?php 	the_field("description") ?></span></p>  
               <p class="atelier atelier__animateur">Animateur: <span class="texte__atelier"><?php 	the_field("animateur") ?></span></p>
               <p class="atelier atelier__local">Local: <span class="texte__atelier"><?php 	the_field("local") ?></span></p>
               <!-- <p>Informations pertinentes</p> -->
               <div class="atelier atelier__temps">
                    <p class="atelier atelier__temps__date-debut">Date de début: <span class="texte__atelier"><?php 	the_field("date_debut") ?></span></p>
                    <p class="atelier atelier__temps__date-fin">Date de fin: <span class="texte__atelier"><?php 	the_field("date_fin") ?></span></p>
                    <p class="atelier atelier__temps__heure-debut">Heure du début de l'atelier: <span class="texte__atelier"><?php 	the_field("heure_debut") ?></span></p>
                    <p class="atelier atelier__temps__heure-fin">Heure de fin de l'atelier: <span class="texte__atelier"><?php 	the_field("heure_fin") ?></span></p>
                    <p class="atelier atelier__temps__duree">Durée d'une séance: <span class="texte__atelier"><?php 	the_field("duree_dune_seance") ?></span></p>
               </div>
          </div>
          <div>
          </div>
               <?php endif ?>
     </article>
</main>
<?php get_footer() ?>



