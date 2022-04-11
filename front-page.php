<?php get_header(); ?>
<main class="site__main home">
    <section class="">
        <?php 	get_sidebar('animation_1'); ?>
    </section>
    <h1 class="site__main__titre home__titre">Accueil</h1>

    <section class="navigation__ecole">
        <?php
            wp_nav_menu(array(
                "menu" => "departement",
                "container" => "nav",
                "container_class" => "departement__menu"
            ));
            wp_nav_menu(array(
                "menu" => "evenements",
                "container" => "nav",
                "container_class" => "evenements__menu"
            ));
        ?>
    </section>
</main>
<?php get_footer(); ?>