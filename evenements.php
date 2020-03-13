<?php /* Template Name: Évènements */ ?>

<?php get_header(); ?>
<div class="page">
      
      <!-- Banner -->
      <div class="banner">
        <div class="banner__content">
          <h1><?php wp_title() ?></h1>
        </div>
      </div>

      <!-- Container page -->
      <div class="container-page container">
        <div class="row">

          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            
            <div class="row">
            <?php 

                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

                $args = array (
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'paged' => $paged
                );

                $my_query = new WP_Query($args);

                if($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post();


            ?>

              <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 post">
                <?php the_post_thumbnail() ?>   
              </div>

              <?php endwhile; ?>

              <div class="pagination col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <?php
                    echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $my_query->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i></i> %1$s', __( 'Article suivant', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i></i>', __( 'Article précédent', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                    ) );
                ?>
            </div>
                    <?php endif; wp_reset_postdata() ?>
            </div>
          </div>
        </div>
      </div>

    </div>
    <?php get_footer() ?>