<?php 	get_header() ?>
<main class="main__single-post .principal">
    <h1>--------------- single-post.php ---------------</h1>
    <?php 	if (have_posts()) : while(have_posts()): the_post(); ?>
        <article class="cours">
            <h2 class="cours__titre">
                <?php 	the_title() ?>
            </h2>
                <section>
                    <p><?= 	get_the_content() ?></p>
                    <barre></barre>
                    <?php 	the_post_thumbnail('medium') ?>
                </section>
        </article>
    <?php 	endwhile; ?>
    <?php 	endif; ?>
</main>
<?php 	get_footer() ?>