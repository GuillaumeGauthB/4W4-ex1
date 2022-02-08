<?php
    function cidw_4w4_enqueue(){
        wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    }

    add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");
?>