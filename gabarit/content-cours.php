<?php 

                // get_category_by_slug()
    $categorie = get_the_category();
    // var_dump($categorie);
    // echo $categorie[1]->slug

?>
<article class="formation__cours  <?php  echo $categorie[1]->slug; ?>">
    <?php          
    $titre = get_the_title();
    $titreFiltreCours = substr($titre, 4, -6);
    $nbHeures = get_field("nombre_dheures") . " heures";
    $sigleCours = substr($titre, 0, 3);
    $descCours = get_the_excerpt();
    ?>
    <?php the_post_thumbnail("thumbnail", "medium"); ?>
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= $descCours; ?></p>
</article>