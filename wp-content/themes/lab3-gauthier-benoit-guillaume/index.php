<?php get_header(); ?>
<main class="site__main">
<h2 class="main__titre">Liste des cours</h2>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); 
            $mon_titre = get_the_title(); 
            $mon_titre_filtre = substr($mon_titre,8);
            $mon_sigle = substr($mon_titre,0,7);
            $mon_titre_filtre = substr($mon_titre_filtre,0,strrpos($mon_titre_filtre, '('));
            $temps = substr($mon_titre, strpos($mon_titre, '('), strpos($mon_titre, ')'));
            $temps = substr($temps, 1,-1)
            ?>
            <section class="carte">
                <h3 class="carte__titre"><?= $mon_titre_filtre ?></h3>
                <p class="carte__sigle"><?= $mon_sigle ?></p>
                <p class="carte__sigle">Durée du cours: <?= $temps ?></p>
                <p class="carte__sigle"><?php echo get_the_excerpt(); ?></p>
            </section>     
        <?php endwhile ?>
    <?php endif ?>
</main>
<?php get_footer(); ?>
</body>
</html>