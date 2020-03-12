<?php get_header() ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div class="page">
      
      <!-- Banner -->
      <div class="banner">
        <div class="banner__content">
          <h1><?php the_title() ?></h1>
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
