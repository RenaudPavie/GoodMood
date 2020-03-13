<?php get_header() ?>
<div class="page container">
      <div>
        
      </div>
      <!-- Container page -->
      <div class="container-page container">
        <div class="row">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

          <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <?php the_content() ?>
          </div>
          <?php endwhile; endif; ?>

        </div>
      </div>

    </div>

<?php get_footer() ?>

<style>
.mainTitlePerPage::before {
    content:'DÉCOUVREZ NOS DERNIERS ARTICLES';
}
</style>

