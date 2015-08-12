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

      <?php wp_nav_menu( array(
      'theme_location' => 'upper-menu',
      'container' => 'div',
      'container_id' => 'navigation',
      'items_wrap' => '<ul id="navigation-items" class="upper-nav">%3$s</ul>', ) ); ?>

    <a href="<?php echo get_option('home'); ?>" class="logo_a"><img src="<?php bloginfo('template_directory'); ?>/images/aoalogo.png" alt="logo" class="logo"></a>

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

      <a href="https://co.clickandpledge.com/sp/d1/default.aspx?wid=109053" target="_blank" class="donate">Donate</a>
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
      <li>
        <img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" />
      </li>
    </ul>
    <div class="flexslider-controls">
      <ol class="flex-control-nav">

        <li><p class="title_piece">Art Piece #1</p><p class="artist">Artist1</p></li>
        <li><p class="title_piece">Art Piece #2</p><p class="artist">Artist2</p></li>
        <li><p class="title_piece">Art Piece #3</p><p class="artist">Artist3</p></li>
        <li><p class="title_piece">Art Piece #4</p><p class="artist">Artist4</p></li>
      </ol>
    </div>
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
            <li><a href="https://www.facebook.com/TheArtOfAlzheimers" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
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
    <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        manualControls: ".flex-control-nav li",
        useCSS: "false"
      });
    });
  </script>
</body>
</html>
