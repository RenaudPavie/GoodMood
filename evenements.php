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
  <?php 
      // WP_Query arguments
    $args = array (
      'post_type'              => array( 'evenements' ),
      'post_status'            => array( 'publish' ),
      'nopaging'               => true,
      'order'                  => 'ASC',
      'orderby'                => 'menu_order',
    );

    // The Query
    $evenements = new WP_Query( $args );

    // The Loop
    if ( $evenements->have_posts() ) {
      while ( $evenements->have_posts() ) {
        $evenements->the_post();
        ?>
          <div class="col-12 col-md-6 col-lg-4 eventBox">
            <?php the_post_thumbnail() ?>
            <a href="<?php the_permalink() ?>"><h2><?php echo strip_tags(the_title()); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'lieux', ' ', ', ')); ?></h2></a>  
            <p><?php echo strip_tags(get_the_term_list( $post->ID, 'dates', ' ', ', ')); ?> - <?php echo strip_tags(get_the_term_list( $post->ID, 'heures', ' ', ', ')); ?></p>          
          </div>
    <?php
      }
    } else {
      // no posts found
    }

    // Restore original Post Data
    wp_reset_postdata();
  ?>
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
