<?php 	get_header() ?>
<main class="main__single-post">
    <h1>--------------- single-post.php ---------------</h1>
    <?php 	if (have_posts()) : while(have_posts()): the_post(); ?>
        <article class="cours">
            <?php 	the_post_thumbnail('medium') ?>
            <h2 class="cours__titre">
                <?php 	the_title() ?>
            </h2>
                <section>
                    <?= 	get_the_content() ?>
                </section>
        </article>
    <?php 	endwhile; ?>
    <?php 	endif; ?>
</main>
<?php 	get_footer() ?>