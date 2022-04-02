<?php 	get_header() ?>
<main>
    <h1>--------------- page.php ---------------</h1>
    <?php 	if (have_posts()) : while(have_posts()): the_post(); ?>
                <?php 	the_title() ?>
                <?php 	the_content() ?>
        </article>
    <?php 	endwhile; ?>
    <?php 	endif; ?>
</main>
<?php 	get_footer() ?>