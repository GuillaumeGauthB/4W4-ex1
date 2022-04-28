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
    $departement = get_field("departement");
    $sigleCours = substr($titre, 0, 3);
    $descCours = get_the_content();
    ?>
    <code class="formation__cours__invisible">
        <?php 	//substr($descCours, 0, 6) ?>
        <!-- <br> -->
        <?php 	//substr($descCours, 6, 12) ?>
        <!-- <br> -->
        <?php 	//substr($descCours, 12) ?>
        <?= $descCours ?>
    </code>
    <?php //the_post_thumbnail("thumbnail", "medium"); ?>
    <img class="cours__img" src="<?= 	esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) ?>" loading="lazy">
    <h3 class="cours__titre">
        <a href="<?php echo get_permalink(); ?>">
            <?= $titreFiltreCours; ?>
        </a>
    </h3>
    <div class="cours__nbre-heure"><?= $nbHeures; ?></div>
    <div class="cours__nbre-heure"><?= $departement; ?></div>
    <p class="cours__sigle"><?= $sigleCours; ?> </p>
    <p class="cours__desc"> <?= wp_trim_words($descCours, 12, "... <button class='cours__desc__bouton'>Lire plus</button>") ?></p>
</article>