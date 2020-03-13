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
                <div class="col-12 col-sm-6 eventImg">
                <?php the_post_thumbnail() ?>          
                </div>
                <div class="col-12 col-sm-6 eventInfo">
                  <h1 class="singleEventTitle"><?php the_title() ?></h1>
                  <!-- <p>Publié le <?php the_date() ?> par <?php the_author() ?></p> -->

                  <!-- On affiche les taxonomies gràce à la fonction the_terms() -->
                  <p><?php echo strip_tags(get_the_term_list( $post->ID, 'dates', ' ', ', ')); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'heures', ' ', ', ')); ?></p>
                  <p><?php echo strip_tags(get_the_term_list( $post->ID, 'lieux', ' ', ', ')); ?></p>

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
          <div class="shareRsx">
            <p>Partager sur</p>
            <div class="ico">
              <a href="https://www.facebook.com/">
                <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/facebookBis.svg" alt="Icone réseau Facebook">
              </a>
              <a href="https://www.twitter.com/">
                <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/twitter2.svg" alt="Icone réseau Twitter">
              </a>
            </div>
          </div>	
        </div>

      </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
