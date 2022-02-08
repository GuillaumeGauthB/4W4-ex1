<?php

    # Inclure nos fichiers css, scripts, police externe
    function lab1_gbg_enqueue() {
        wp_enqueue_style('lab1-gbg-style-css', get_stylesheet_uri());
        // wp_enqueue_script('script-name', get_template_directory_uri() . '/js/exmaple.js')
        wp_enqueue_style( 'lab1-gbg-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap');
    }

    add_action('wp_enqueue_scripts', 'lab1_gbg_enqueue');
?>
