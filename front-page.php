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
        $posts = get_posts($args);
        if ($posts) {
          foreach($posts as $post) {
            setup_postdata($post);
      ?>
            <li>
            <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
            <p><small>Posted on <?php the_time('F j, Y') ?></small></p>
          </li>
        <?php
          }
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
          $posts = get_posts($args);
          if ($posts) {
            foreach($posts as $post) {
              setup_postdata($post);
        ?>
              <li>
              <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
              <p><small>Posted on <?php the_time('F j, Y') ?></small></p>
            </li>
          <?php
            }
          }
          ?>

      </ul>
    </div>
  </div>
</div>
<?php get_footer( 'home' ); ?>
