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

/*
* On utilise une fonction pour créer notre custom post type 'Évènements'
*/
function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Évènements', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Évènement', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Évènements'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Tous les Évènements'),
		'view_item'           => __( 'Voir les Évènements'),
		'add_new_item'        => __( 'Ajouter un nouvel Évènement'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer l\'Évènements'),
		'update_item'         => __( 'Modifier l\'Évènements'),
		'search_items'        => __( 'Rechercher un Évènement'),
		'not_found'           => __( 'Non trouvé'),
		'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Évènements'),
		'description'         => __( 'Tous sur les Évènements'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'evenements'),
        'menu_icon'           => 'dashicons-calendar-alt',

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'evenements', $args );

}
add_action( 'init', 'wpm_custom_post_type', 0 );


//On crée 3 taxonomies personnalisées: Lieu, Réalisateurs et Catégories de série.
function wpm_add_taxonomies() {
	// Taxonomie Lieu
	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_lieu = array(
		'name'              			=> _x( 'Lieux', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Lieu', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher un lieu'),
		'all_items'        				=> __( 'Tous les lieux'),
		'edit_item'         			=> __( 'Editer le lieu'),
		'update_item'       			=> __( 'Mettre à jour le lieu'),
		'add_new_item'     				=> __( 'Ajouter un nouveau lieu'),
		'new_item_name'     			=> __( 'Valeur du nouveau lieu'),
		'menu_name'                     => __( 'Lieu'),
	);

	$args_lieu = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_lieu,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'lieux' ),
	);

    register_taxonomy( 'lieux', 'evenements', $args_lieu );
    
    
// Taxonomie Date
	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_date = array(
		'name'              			=> _x( 'Dates', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Date', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une date'),
		'all_items'        				=> __( 'Toutes les dates'),
		'edit_item'         			=> __( 'Editer la date'),
		'update_item'       			=> __( 'Mettre à jour la date'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle date'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle date'),
		'menu_name'                     => __( 'Date'),
	);

	$args_date = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_date,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'dates' ),
	);

    register_taxonomy( 'dates', 'evenements', $args_date );
    
    // Taxonomie Heure
	// On déclare ici les différentes dénominations de notre taxonomie qui seront affichées et utilisées dans l'administration de WordPress
	$labels_heure = array(
		'name'              			=> _x( 'Heures', 'taxonomy general name'),
		'singular_name'     			=> _x( 'Heure', 'taxonomy singular name'),
		'search_items'      			=> __( 'Chercher une heure'),
		'all_items'        				=> __( 'Toutes les heures'),
		'edit_item'         			=> __( 'Editer la heure'),
		'upheure_item'       			=> __( 'Mettre à jour la heure'),
		'add_new_item'     				=> __( 'Ajouter une nouvelle heure'),
		'new_item_name'     			=> __( 'Valeur de la nouvelle heure'),
		'menu_name'                     => __( 'Heure'),
	);

	$args_heure = array(
	// Si 'hierarchical' est défini à false, notre taxonomie se comportera comme une étiquette standard
		'hierarchical'      => false,
		'labels'            => $labels_heure,
		'show_ui'           => true,
		'show_in_rest'      => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'heures' ),
	);

	register_taxonomy( 'heures', 'evenements', $args_heure );

	
}
add_action( 'init', 'wpm_add_taxonomies', 0 );
?>