<?php
/*
Template Name: Home
*/
?>
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
    <ul class="upper-nav">
      <li><a href="">About</a></li>
      <li><a href="">Donors/Partners</a></li>
      <li><a href="">Resources</a></li>
      <li><a href="">Contact</a></li>
    </ul>
    <a href="home.php" class="logo_a"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo" class="logo"></a>
    <form class="email">
      <label>Subscribe:</label> <input type="text" placeholder="janesmith@example.com">
      <button type="submit">sign-up</button>
    </form>
    <nav>
      <?php wp_nav_menu( array(
      'theme_location' => 'main-menu',
      'container' => 'div',
      'container_id' => 'navigation',
      'items_wrap' => '<ul id="navigation-items" class="nav">%3$s</ul>', ) ); ?>
      <a href="" class="donate">DONATE</a>
    </nav>
  </div>
  <article class="home">
    <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" />
      </li>
      <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" />
      </li>
      <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" />
      </li>
    </ul>
  </div>

  <div class="about">
    <a href="">About</a>
    <p>
      Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Morbi tristique aliquam est, id
    tincidunt orci luctus sit amet. Interdum et
    malesuada fames ac ante ipsum primis in
    faucibus.
    </p>
  </div>
  <div class="quote">
    <blockquote>
      “Lorem ipsum dolor sit amet,
      consectetur adipiscing elit.”
      <blockquote>
  </div>
  <div class="latest_postings">
    <a href="">Latest Postings</a>
    <p>
      Lorem ipsum dolor sit amet, consectetur
    adipiscing elit. Morbi tristique aliquam est, id
    tincidunt orci luctus sit amet. Interdum et
    malesuada fames ac ante ipsum primis in
    faucibus.
    </p>
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
              <form class="email">
                <label>Subscribe:</label> <input type="text" placeholder="janesmith@example.com">
                <button type="submit">sign-up</button>
              </form>
            </li>
        <ul>
      </div>
    </footer>
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider();
    });
  </script>
</body>
</html>
