<?php 

require_once("options/apparence.php");

function cidw_4w4_enqueue(){
    //wp_enqueue_style('style_css', get_stylesheet_uri());
    wp_enqueue_style('4w4-le-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), false);
    wp_enqueue_style('cidw-4w4-police-google', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Palette+Mosaic&family=Ubuntu+Mono&display=swap', false);
    wp_enqueue_script('cidw-4w4-boite-modale', get_template_directory_uri() . '/scripts/boite-modale.js', array(), filemtime(get_template_directory() . '/scripts/boite-modale.js'), true);
    wp_enqueue_script('cidw-4w4-burger', get_template_directory_uri() . '/scripts/burger.js', array(), filemtime(get_template_directory() . '/scripts/burger.js'), true);
}
add_action("wp_enqueue_scripts", "cidw_4w4_enqueue");

/* -------------------------------------------------- Enregistré le menu */
function cidw_4w4_register_nav_menu(){
    register_nav_menus( array(
        'menu_principal'     => __( 'Menu principal', 'cidw_4w4' ),
        'menu_footer'        => __( 'Menu footer', 'cidw_4w4' ),
        'menu_lien__externe'  => __( 'Menu lien externe', 'cidw_4w4' ),
        'menu_frontpage'    => __('Menu front page', 'cidw_4w4'),
        'menu_accueil'      => __('Menu accueil', 'cidw_4w4'),
        'departement'       => __('Département TIM', 'cidw-4w4'),
        'evenements'        => __('Les évènements à venir', 'cidw-4w4')));
}
add_action( 'after_setup_theme', 'cidw_4w4_register_nav_menu', 0 );

/* ---------------------------------------------------------------------- filtré les choix du menu principal */
function cidw_4w4_filtre_choix_menu($obj_menu){
    //var_dump($obj_menu);
    foreach($obj_menu as $cle => $value)
    {
       // print_r($value);
       //$value->title = substr($value->title,0,7);
       $value->title = wp_trim_words($value->title,3,"...");
       // echo $value->title . '<br>';
    }
    return $obj_menu;
}
add_filter("wp_nav_menu_objects","cidw_4w4_filtre_choix_menu");

// ---------------------------------------------------------------------- add_theme_support();
function cidw_4w4_add_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        "width" => 100,
        "height" => 100
    ));
}
add_action('after_setup_theme', 'cidw_4w4_add_theme_support');

/*------------------------------------------------------------- Enregistrement des sidebars*/
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_1',
            'name'          => __( 'Pied de page colonne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_2',
            'name'          => __( 'Pied de page colonne 2' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_colonne_3',
            'name'          => __( 'Pied de page colonne 3' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'pied_page_ligne_1',
            'name'          => __( 'Pied de page ligne 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'entete_1',
            'name'          => __( 'Entete 1' ),
            'description'   => __( 'Colonne de pied de page' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'animation_1',
            'name'          => __( 'Animation 1' ),
            'description'   => __( 'Animation des cercles du front page' ),
            'before_widget' => '<div id="%1$s" class="animation widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'caroussel_image_1',
            'name'          => __( 'Caroussel image 1' ),
            'description'   => __( 'Images des caroussels' ),
            // 'before_widget' => '<div id="%1$s" class="animation widget %2$s">',
            // 'after_widget'  => '</div>',
            // 'before_title'  => '<h3 class="widget-title">',
            // 'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'caroussel_image_2',
            'name'          => __( 'Caroussel image 2' ),
            'description'   => __( 'Images des caroussels' ),
            // 'before_widget' => '<div id="%1$s" class="animation widget %2$s">',
            // 'after_widget'  => '</div>',
            // 'before_title'  => '<h3 class="widget-title">',
            // 'after_title'   => '</h3>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'caroussel_image_3',
            'name'          => __( 'Caroussel image 3' ),
            'description'   => __( 'Images des caroussels' ),
            // 'before_widget' => '<div id="%1$s" class="animation widget %2$s">',
            // 'after_widget'  => '</div>',
            // 'before_title'  => '<h3 class="widget-title">',
            // 'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}

/* ----------------------------------------------------------------- */
function trouve_la_categorie($tableau){
    foreach($tableau as $cle){
        if(is_category($cle)) return($cle);
    }
}

// ----------------------------------------------------------Ajout de la description dans menu
function prefix_nav_description( $item_output, $item,  $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>',
        $args->link_after .'<hr><span class="menu-item-description">' . $item->description . '</span>' .  '</a>',
        '<hr><span class="menu-item-description">' . $item->description. '</span></a>',
              $item_output );
    }
}
// l'argument 10 : niveau de privilège
// l'argument 2 : le nombre d'argument dans la fonction de rappel: «prefix_nav_description»


/* ---------------------------------------------------------------------- */
/**
 * @param : WP_Query $query
 */
function cidw_4w4_pre_get_posts(WP_Query $query)
{
   if (!is_admin() && is_main_query() && is_category(array("cours","web","jeu","creation-3d","utilitaire", "design" )))  {
        
    // var_dump($query);
    //    die();
    $ordre = get_query_var('ordre');
    $cle = get_query_var('cletri');
//echo "----ordre =". $ordre ."----------------<br>";
//echo "----cle =". $cle ."----------------<br>";


    $query->set('posts_per_page', -1);
    $query->set('orderby', $cle);
    $query->set('order', $ordre);

   }
 


  if (is_admin() && !is_main_query() && !is_category(array('web','cours','design','video','utilitaire','creation-3d','jeu'))) 
    {
        return $query;
    }        
    else
    {
        $ordre = get_query_var('ordre');
        $cle = get_query_var('cletri');       
        $query->set('order',  $ordre);
        $query->set('orderby', $cle);

        $query->set('postperpage','-1');
        return $query;
    }
  
}
function cidw_4w4_query_vars($params){
    $params[] = "cletri";
    $params[] = "ordre";
    return $params;
}
add_action('pre_get_posts', 'cidw_4w4_pre_get_posts');
/* Le hook «pre_get_posts» nous permet d'alterer les composante de la requête WP_query */
add_filter('query_vars', 'cidw_4w4_query_vars' );
/* Le hook «query_vars» nous permet d'alterer les arguments de l'URL */
?>