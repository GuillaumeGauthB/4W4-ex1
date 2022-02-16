<?php get_header() ?>
<main class="principal">
    <h1>----------------front-page--------------------</h1>
    <section class="formation">
        <h2 class="formation__titre">Liste des cours du programme TIM</h2>
        <div class="formation__liste">
            <?php if (have_posts()):the_post() ?>
                        <?php
                        the_title();
                        the_content();
                        ?>
                <?php endif ?>
        </div>
    </section>
</main>
<?php get_footer() ?>