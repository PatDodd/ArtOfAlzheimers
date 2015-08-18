<?php get_header(); ?>
<div class="content-container">
    <div class="content">
      <h1><?php the_title(); ?></h1>
      <hr>

      <?php gallery_page_feed(); ?>
      <div>
      <?php add_flexslider(); ?>
    </div>

      <small>page.php</small> <!-- TO BE REMOVED AFTER DEVELOPMENT -->
    </div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
