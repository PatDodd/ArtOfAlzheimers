<?php get_header(); ?>
<div class="content-container">
    <div class="flexslider">
      <ul class="slides">
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/slide2.jpg" alt="slide1" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/slide1.jpg" alt="slide2" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/slide3.jpg" alt="slide3" />
        </li>
        <li>
          <img src="<?php bloginfo('template_directory'); ?>/images/slide4.jpg" alt="slide4" />
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
  <div class="cta-area">
    <div class="cta">
      <h2>Latest News</h2>
      <hr>
      <ul>
      <?php
        $args = array( 'numberposts' => '3', 'category_name' => 'news' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          echo '<small>Posted on ' . get_the_time('F jS, Y') . '</small>';
          echo '<br><br>';
        }
      ?>
      </ul>
    </div>
    <div class="cta">
      <h2>About</h2>
      <hr>
      <?php about_cta(); ?>
    </div>
    <div class="cta">
      <h2>Latest Postings</h2>
      <hr>
      <ul>
      <?php
        $args = array( 'numberposts' => '3', 'category_name' => 'blog' );
        $recent_posts = wp_get_recent_posts( $args );
        foreach( $recent_posts as $recent ){
          echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
          echo '<small>Posted on ' . get_the_time('F jS, Y') . '</small>';
          echo '<br><br>';
        }
      ?>
      </ul>
    </div>
  </div>
</div>
<?php get_footer( 'home' ); ?>
