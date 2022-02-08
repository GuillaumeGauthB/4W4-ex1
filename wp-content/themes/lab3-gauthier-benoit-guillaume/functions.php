<?php
function cidw_4w4_enqueue() {
// wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css')
wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
wp_enqueue_style('cidw_4w4_enregistre_police_google',
'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">',
false);
} 

add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/*-------------------------------------------------------------  Enregistrer le menu */

function cidw_4w4_enregistre_mon_menu(){
    register_nav_menu( 'principal', __( 'Menu principal', 'cidw_4w4'));
}

add_action('after_setup_theme', 'cidw_4w4_enregistre_mon_menu');

/*-------------------------------------------------------------  Filtré chacun des éléments du menu */

function cidw_4w4_filtre_le_menu($mon_objet){
    foreach($mon_objet as $cle => $valeur) {
        // $valeur->title = substr($valeur->title, 0, 7);
        $valeur->title = wp_trim_words($valeur->title, 4, "...");
    }

    return $mon_objet;
}

add_filter("wp_nav_menu_objects", "cidw_4w4_filtre_le_menu");
?>