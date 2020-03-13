<?php get_header() ?>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="single container">
      
      <!-- Banner -->
      <div class="banner">
        <div class="banner__content">
          <div class="container page">
            <div class="single-thumbnail"><?php the_post_thumbnail() ?></div>
            <h1><?php the_title() ?></h1>
            <p>
            <?php the_content() ?>
            </p>
          </div>
        </div>
      </div>

    </div>
<?php endwhile; endif; ?>

<?php get_footer() ?>
