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
            <?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
            <div class="article">
                <p class="category">MUSIQUE</p>
                <h3>POURQUOI ON AIME ALOÏSE SAUVAGE ?</h3>
                <p>
                Fine silhouette ultra tonique, carré brun, regard de braise, traits affirmés, beaucoup 
                de jolies chaussettes … Le charisme est certain chez Aloïse Sauvage, et sa simplicité 
                non feinte. Dès qu’il s’agit de mondanités, on devine de la retenue, voire de la méfiance 
                chez celle qui s’entoure d’une garde rapprochée, tant familiale qu’amicale, à laquelle elle 
                est fidèle depuis des années… Le tout pour un talent qui ne cesse de se façonner depuis sa 
                naissance.
                </p>
                <div class="know-more">
                    <p>EN SAVOIR PLUS</p>
                </div>
                <div class="thumbnail">
                    <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
                </div>
            </div>
                <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
            <?php endwhile; ?>

    </div>
</div>
