<?php 
/* Template Name: Actualités */ 
get_header(); ?>

<div class="page">
    <!-- Banner -->
    <div class="banner">
        <div class="banner__content">
            <h1> <?php wp_title() ?> </h1>
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
                <p class="category" style="pointer-events: none !important;"><?php the_category($separator = ", "); ?></p>
                <h3><?php the_title(); ?></h3>
                <p><?php the_excerpt(); ?></p>
                <div class="know-more">
                <a href="<?php the_permalink() ?>"><p>EN SAVOIR PLUS</p></a>
                </div>
                <div class="thumbnail">
                    <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
                </div>
            </div>
            <?php endforeach; ?>

    </div>
</div>
