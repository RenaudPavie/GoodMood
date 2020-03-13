<?php /* Template Name: Évènements */ ?>

<?php get_header(); ?>
<div class="page container">
      
      <!-- Banner -->
      <div class="banner">
        <div class="banner__content">
          <h1 class="mainTitlePerPage"><?php wp_title("", true, "") ?></h1>
        </div>
      </div>

    
      <div class="eventWrapper row">
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        <div class="col-12 col-md-6 col-lg-4 eventBox">
          <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/photo.jpg" alt="">
          <h2>NEKFEU - 106</h2>  
          <p>VENDREDI 17 JANVIER 2020 - 20h00</p>          
        </div>
        
      </div>
      </div>
    </div>
    <div class="bgEventBeforeFooter container-fluid">
      <img src="<?php bloginfo("stylesheet_directory") ?>/assets/img/crowd.png" alt="Image de foule">
    </div>
    <?php get_footer() ?>



<style>
.mainTitlePerPage::before {
    content:'<?php wp_title("", true, ""); ?>';
}
</style>
