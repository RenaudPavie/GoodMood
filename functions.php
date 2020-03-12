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
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
    'flex-width' => true,
    'flex-height' => true,
) );

function goodmood_default_menu() {

	$html = '<ul id="acme-default-menu">';
		$html .= '<li class="menu-item menu-item-type-post_type menu-item-object-page">';
			$html .= '<a href="' . esc_url( home_url() ) . '" title="' . __( 'Home', 'acme' ) . '">';
				$html .= __( 'Home', 'acme' );
			$html .= '</a>';
		$html .= '</li>';
	$html .= '</ul>';

	echo $html;

} 
?>