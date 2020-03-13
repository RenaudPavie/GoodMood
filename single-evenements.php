<?php get_header() ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="single">
      
      <!-- Banner -->
      <div class="banner">
        <div class="banner__content">
          <div class="container">
            <div class="row">
              <div class="col-4">
              <?php the_post_thumbnail() ?>          
              </div>
              <div class="col-8">
                <h1><?php the_title() ?></h1>
                <p>Publié le <?php the_date() ?> par <?php the_author() ?></p>


                <!-- On affiche les taxonomies gràce à la fonction the_terms() -->
              <?php the_terms( $post->ID, 'lieux', 'Lieu : ' ); ?> <br>
              <?php the_terms( $post->ID, 'dates', 'Date : ' );?> <br>
              <?php the_terms( $post->ID, 'heures', 'Heure : ' ); ?><br>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Container page -->
      <div class="container-page container">
        <div class="row">

          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
          <?php the_content() ?>
          </div>

        </div>
      </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
