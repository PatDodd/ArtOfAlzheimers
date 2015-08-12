<?php get_header(); ?>
    <div class="content">
      <h1><?php the_title(); ?></h1>
      <hr>

      <?php gallery_page_feed(); ?>

      <small>page.php</small> <!-- TO BE REMOVED AFTER DEVELOPMENT -->
    </div>
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
