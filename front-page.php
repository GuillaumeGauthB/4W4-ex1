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
    <section class="animation">
        <div>
            <p>1</p>
        </div>
        <div>
            <p>2</p>
        </div>
        <div>
            <p>3</p>
        </div>
        <div>
            <p>4</p>
        </div>
        <div>
            <p>5</p>
        </div>
    </section>
</main>
<?php get_footer() ?>