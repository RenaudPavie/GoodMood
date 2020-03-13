<?php
/* Template Name: Accueil */ 
?>

<?php get_header() ?>
<div id="primary" class="content-area container page">
    <div id="content" class="site-content" role="main">

        <?php
        // Start the Loop.
        while ( have_posts() ) :
            the_post();
            ?>

            <!-- Banner -->
            <div class="banner">
                <div class="banner__content">
                    <h1 class="mainTitlePerPage" title="A propos"> A propos</h1>
                </div>
            </div>

            <?php the_content(); ?>

            <?php
            // Include the page content template.
            get_template_part( 'content', 'page' );

            endwhile;
        ?>

</div><!-- #content -->
</div><!-- #main-content -->

<!-- Evenements -->
<div class="event-section">
    <div class="banner">
        <div class="banner__content">
            <h1 class="mainTitlePerPage" title="Nos évènements">Nos évènements</h1>
        </div>
    </div>
    <div class="eventWrapper row">
        <?php 
            // WP_Query arguments
            $args = array (
            'post_type'              => array( 'evenements' ),
            'post_status'            => array( 'publish' ),
            'nopaging'               => true,
            'order'                  => 'ASC',
            'orderby'                => 'menu_order',
            );

            // The Query
            $evenements = new WP_Query( $args );

            // The Loop
            if ( $evenements->have_posts() ) {
                while ( $evenements->have_posts() ) {
                    $evenements->the_post();
                    ?>
                    <div class="col-12 col-md-6 col-lg-4 eventBox">
                        <?php the_post_thumbnail() ?>
                        <a href="<?php the_permalink() ?>"><h2><?php echo strip_tags(the_title()); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'lieux', ' ', ', ')); ?></h2></a>  
                        <p><?php echo strip_tags(get_the_term_list( $post->ID, 'dates', ' ', ', ')); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'heures', ' ', ', ')); ?></p>          
                    </div>
                    <?php
                }
            } else {
                echo '<p>Aucun évènements à venir</p>';
            }

            // Restore original Post Data
            wp_reset_postdata();
        ?>
        </div>
    </div>
</div>

<div class="page container">

    <!-- Actualites -->
    <div class="actualite-section">
        <div class="banner">
            <div class="banner__content">
                <h1 class="mainTitlePerPage" title="Découvre toutes nos actualités">Découvre toutes nos actualités</h1>
            </div>
        </div>
        <div class="bloc-actus">
        <?php
            $recentPosts = new WP_Query();
            $recentPosts->query('showposts=5');
        ?>
        <?php $args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
            $postslist = get_posts( $args );
            foreach ($postslist as $post) :  setup_postdata($post); ?>
            <div class="article">
                <div>
                    <p class="category" style="pointer-events: none !important;"><?php the_category($separator = ", "); ?></p>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <div class="know-more">
                        <a href="<?php the_permalink() ?>"><p>EN SAVOIR PLUS</p></a>
                    </div>
                </div>
                <div class="thumbnail">
                    <?php the_post_thumbnail() ?>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>

</div>

<div class="newsletter">
    <h3>Restez informé</h3>
    <div>
        <input type="text" placeholder="Votre email">
        <input type="submit" value="Ok">
    </div>
</div>


<?php get_footer() ?>
<style>
.mainTitlePerPage::before {
    content: attr(title);
}
.newsletter {
    background-image: url("<?php bloginfo("stylesheet_directory") ?>/assets/img/aditya-chinchure-ZhQCZjr9fHo-unsplash.jpg");
}
</style>
