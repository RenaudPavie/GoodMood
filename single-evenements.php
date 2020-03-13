<?php get_header() ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="single page">
      <div class="container-fluid eventBanniere">
        <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/eventBanniere.jpg" alt="">
      </div>


      <div class="singleEventContent">
        <!-- Banner -->
        <div class="banner singleEvent">
          <div class="banner__content">
            <div class="container">
              <div class="row">
                <div class="col-6 eventImg">
                <?php the_post_thumbnail() ?>          
                </div>
                <div class="col-6 eventInfo">
                  <h1 class="singleEventTitle"><?php the_title() ?></h1>
                  <!-- <p>Publié le <?php the_date() ?> par <?php the_author() ?></p> -->


                  <!-- On affiche les taxonomies gràce à la fonction the_terms() -->
                  <a href="#">VENDREDI 17 JANVIER 2020</a> - <a href="#">20h00</a> <br>
                  <!-- <?php the_terms( $post->ID, 'dates', '' );?> -  -->
                  <!-- <?php the_terms( $post->ID, 'heures', '' ); ?><br> -->

                  <a href="#">106 - Grande Salle</a>
                  <!-- <?php the_terms( $post->ID, 'lieux', '' ); ?> <br> -->

                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Container page -->
        <div class="container-page container">
          <div class="row">

            <div class="col-12 eventDescription">
            <?php the_content() ?>
            </div>

          </div>
        </div>

      </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
