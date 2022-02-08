<?php
function cidw_4w4_enqueue() {
// wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
} 

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/*-------------------------------------------------------------  Enregistrer le menu */

function cidw_4w4_enregistre_mon_menu(){
    register_nav_menu( 'principal', __( 'Menu principal', 'cidw_4w4'));
}

add_action('after_setup_theme', 'cidw_4w4_enregistre_mon_menu');
?>