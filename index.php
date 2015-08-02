<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2" />
  <title><?php bloginfo('Description'); ?> | <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="<?php bloginfo('template_directory'); ?>/jquery.flexslider.js"></script>
  <link href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
  <div class="header">

    <?php wp_nav_menu( array(
    'theme_location' => 'upper-menu',
    'container' => 'div',
    'container_id' => 'navigation',
    'items_wrap' => '<ul id="navigation-items" class="upper-nav">%3$s</ul>', ) ); ?>

    <a href="<?php echo get_option('home'); ?>" class="logo_a"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" class="logo"></a>

    <nav>
      <form class="email">
        <label>Subscribe:</label> <input type="text" placeholder="janesmith@example.com">
        <button type="submit">sign-up</button>
      </form>
      <?php wp_nav_menu( array(
      'theme_location' => 'main-menu',
      'container' => 'div',
      'container_id' => 'navigation',
      'items_wrap' => '<ul id="navigation-items" class="nav">%3$s</ul>', ) ); ?>

      <a href="" class="donate">DONATE</a>
    </nav>
  </div>
  <article class="home">
    <img class="top-bar-image" src="<?php bloginfo('template_directory'); ?>/images/top-bar-image.png" alt="gallery top bar image">
    <div class="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
      <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2>
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
  <footer>
    <?php wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'container' => 'div',
    'container_id' => 'navigation',
    'items_wrap' => '<ul id="navigation-items" class="lower-nav">%3$s</ul>', ) ); ?>
    <div>
    <ul class="social">
        <li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus-square fa-2x"></i></a></li>
        <li><a href=""><i class="fa fa-twitter-square fa-2x"></i></a></li>
        <li>
          <form>
            <input type="text" placeholder="janesmith@example.com">
            <button type="submit">sign-up</button>
          </form>
        </li>
    <ul>
    </div>
  </footer>
</body>
</html>
