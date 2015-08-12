<?php
include 'includes/header.php';
?>
  <article class="home">
    <div class="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <h2><?php the_title(); // get the page or posting title ?></h2>
      <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    </div>
    <div class="right-sidebar">
      <div class="latest-postings-sidebar">
        <a href="#"><h3>Latest Postings</h3>
        <a href="#"><div class="sidebar-latest-post">
          <img src="<?php bloginfo('template_directory'); ?>/images/sidebar-thumbnail-1.png" alt="latest postings sidebar thumbnail">
          <h4>Lorem Ipsum</h4>
          <small>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</small>
        </div></a>
        <a href="#"><div class="sidebar-latest-post">
          <img src="<?php bloginfo('template_directory'); ?>/images/sidebar-thumbnail-2.png" alt="latest postings sidebar thumbnail">
          <h4>Lorem Ipsum</h4>
          <small>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</small>
        </div></a>
        <a href="#"><div class="sidebar-latest-post">
          <img src="<?php bloginfo('template_directory'); ?>/images/sidebar-thumbnail-3.png" alt="latest postings sidebar thumbnail">
          <h4>Lorem Ipsum</h4>
          <small>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</small>
        </div></a>
      </div>
      <div class="blog-archives-sidebar">
        <h3>Blog Archives</h3>
        <ul>
          <a href="#"><li>&#9658; 2015</li></a>
          <a href="#"><li>&#9658; 2014</li></a>
          <a href="#"><li>&#9658; 2013</li></a>
        </ul>
      </div>
    </div>
  </article>
<?php include 'includes/footer.php'?>
