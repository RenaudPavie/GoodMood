<?php 
/* Template Name: Actualités */ 
get_header(); ?>

<div class="page container">
    <!-- Banner -->
    <div class="banner">
        <div class="banner__content">
            <h1 class="mainTitlePerPage"> <?php wp_title("", true, "") ?> </h1>
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
<style>
.mainTitlePerPage::before {
    content:'<?php wp_title("", true, ""); ?>';
}
</style>
