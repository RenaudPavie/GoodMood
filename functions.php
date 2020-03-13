<?php
//Ajout des menus
add_theme_support('nav_menus');
register_nav_menu('header','Menu header');
register_nav_menu('footer', 'Menu footer');
wp_nav_menu(
	array(
		'theme_location' => 'header',
		'fallback_cb'    => 'goodmood_default_menu'
	)
);

// ajout des thumbnails
add_theme_support('post-thumbnails');

// configure les couleurs pour l'édition
add_theme_support( 'editor-color-palette',
    array(
		array(
            'name'  => __( 'Blue', 'GoodMoodTheme' ),
            'slug'  => 'primary',
            'color' => '#05386B',
        ),
        array(
            'name'  => __( 'Light Blue', 'GoodMoodTheme' ),
            'slug'  => 'secondary',
            'color' => '#379683',
        ),
        array(
            'name'  => __( 'Green', 'GoodMoodTheme' ),
            'slug'  => 'third',
            'color' => "#00D880",
        ),
        array(
            'name'  => __( 'Light Green', 'GoodMoodTheme' ),
            'slug'  => 'fourth',
            'color' => "#5CDB95",
        ),
        array(
            'name'  => __( 'Dark Gray', 'GoodMoodTheme' ),
            'slug'  => 'dark-gray',
            'color' => '#001628',
        ),
        array(
            'name'  => __( 'Light Gray', 'GoodMoodTheme' ),
            'slug'  => 'light-gray',
            'color' => '#D7FFE7',
        ),
	)
);
add_theme_support( 'disable-custom-colors' );

// configure les tailles de police pour l'édition
add_theme_support( 'editor-font-sizes', array(
    array(
        'name' => __( 'small', 'GoodMoodTheme' ),
        'shortName' => __( 'S', 'GoodMoodTheme' ),
        'size' => 12,
        'slug' => 'small'
    ),
    array(
        'name' => __( 'regular', 'GoodMoodTheme' ),
        'shortName' => __( 'M', 'GoodMoodTheme' ),
        'size' => 16,
        'slug' => 'regular'
    ),
    array(
        'name' => __( 'large', 'GoodMoodTheme' ),
        'shortName' => __( 'L', 'GoodMoodTheme' ),
        'size' => 36,
        'slug' => 'large'
    ),
    array(
        'name' => __( 'larger', 'GoodMoodTheme' ),
        'shortName' => __( 'XL', 'GoodMoodTheme' ),
        'size' => 50,
        'slug' => 'larger'
    )
) );

// afichage de gutenberg dans le back office
add_theme_support( 'wp-block-styles' );
add_theme_support( 'responsive-embeds' );

// logo
add_image_size('mytheme-logo', 160, 90);
add_theme_support('custom-logo', array(
    'size' => 'mytheme-logo'
));

//CPT 
function create_custom_post_type() {
 
    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Évènements', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Évènement', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Évènements'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes les Évènements'),
        'view_item'           => __( 'Voir l\'évènement'),
        'add_new_item'        => __( 'Ajouter un évènement'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un évènement'),
        'update_item'         => __( 'Modifier l\'évènement'),
        'search_items'        => __( 'Rechercher un évènement'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );
   
    // On peut définir ici d'autres options pour notre custom post type
   
    $args = array(
        'label'               => __( 'Évènements'),
        'description'         => __( 'Tous les Évènements'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'thumbnail'),
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'             => array( 'slug' => 'évènement'),
 
    );
   
    // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
    register_post_type( 'évènement', $args );
 
}
 
add_action( 'init', 'create_custom_post_type', 0 );
?>
?>