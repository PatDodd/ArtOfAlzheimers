<?php get_header(); ?>
    <div class="content">
      <h1><?php wp_title(''); ?></h1>
      <hr>

      <?php blog_page_feed(); ?>

    </div>
    <small>home.php</small>
<?php get_sidebar(); ?>       
<?php get_footer(); ?>