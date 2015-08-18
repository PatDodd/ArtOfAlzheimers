<?php

/*
Theme Name: The Art of Alzheimers
Theme URI: http://hurricanelanterns.net/wp
Description: A theme for The Art of Alzheimers non-profit
Authors: Eric Weigle, Kaela Lavin, Christina Fernandez, Patrick Dodd
Author URI:
Version: 1.0
Tags:
License:
License URI:
General comments (optional).
*/

//register menus
register_nav_menus(array(
  'main-menu' => __('Main Menu'),
  'upper-menu' => __('Upper Menu')
));

//Post Thumbnails
add_theme_support( 'post-thumbnails' );

//Post Excerpts
add_post_type_support( 'page', 'excerpt' );

//get blog feed
function blog_page_feed() {

	$paged = get_query_var( 'paged', 1 );
	$args = array( 'posts_per_page' => 10, 'paged' => $paged );
	$the_query = new WP_Query( $args );

	// TAILOR PAGER BEHAVIOR TO NUMBER OF POSTS
	if( $the_query->found_posts <= 10 ){
		$pager_class = 'pager-div-collapse';
	}else{
		$pager_class = 'pager-div';
	}

	if ( $the_query->have_posts() ){

		while ( $the_query->have_posts() ){

			$the_query->the_post(); // START THE LOOP
			echo '<div class="blog-feed">';
			echo '<h2><a href="' . get_permalink() . '" class="blog-title">' . get_the_title() . '</a></h2>';
			echo '<p>Posted on ' . get_the_time('F j, Y') . '</p>';
			echo get_the_post_thumbnail();
			echo the_content("Continue reading " . get_the_title());
			echo '<p>Posted in ';
			the_category(', ');
			echo'</p>';
			echo '<hr>';
			echo '</div>';
		}
		echo '<div class="' . $pager_class . '">';
		echo '<h4 class="forward-paging-link">' . get_next_posts_link( 'More Blog Posts &raquo;', $the_query->max_num_pages ) . '</h4>';
		echo '<h4 class="backward-paging-link">' . get_previous_posts_link( '&laquo; Previous Blog Posts' ) . '</h4>';
		echo '</div>';
		wp_reset_postdata(); //reset
	}//END THE LOOP
}

//get gallery artist feed
function gallery_page_feed() {

	$page_id = get_page_by_title( 'gallery' ); //find the id of the gallery page
	$paged = get_query_var('paged', 1);
	$args = array( 'posts_per_page' => 10, 'paged' => $paged, 'post_type' => 'page', 'post_parent' => $page_id->ID ); //see if the post is a page and if the parent is gallery

    $the_query = new WP_Query( $args );

    if( $the_query->found_posts <= 10 ){
    	$pager_class = 'pager-div-collapse';
    }else{
    	$pager_class = 'pager-div';
    }

    if ( is_page( $page_id->ID ) && $the_query->have_posts() ){ //run the loop with these parameters

    	echo '<div class="'.$pager_class.'">';
        echo '<h4 class="forward-paging-link">' . get_next_posts_link( 'More Artists &raquo;', $the_query->max_num_pages ) . '</h4>';
		echo '<h4 class="backward-paging-link">' . get_previous_posts_link( '&laquo; Previous Artists' ) . '</h4>';
		echo '</div>';

        // The Loop
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<div class="gallery-entry">';
            echo '<a href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>';
            echo '<h2><a href="' . get_permalink() . '" class="artist-name">' . get_the_title() . '</a></h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
            echo '<a class="gallery-entry-read-more" href="' . get_permalink() . '">Read More</a>';
            echo '</div>';
        }
        echo '<div class="'.$pager_class.'">';
        echo '<h4 class="forward-paging-link">' . get_next_posts_link( 'More Artists &raquo;', $the_query->max_num_pages ) . '</h4>';
		echo '<h4 class="backward-paging-link">' . get_previous_posts_link( '&laquo; Previous Artists' ) . '</h4>';
		echo '</div>';
        wp_reset_postdata(); //reset

    }else{
    	//run the regular loop
        if (have_posts() ) : while ( have_posts() ) : the_post();
        the_content('');
        endwhile; endif;

    }
}

function about_cta() {
	$args = array( 'post_type' => 'page', 'pagename' => 'about' ); //see if the post is a page and if the parent is gallery

    $the_query = new WP_Query( $args );

    if ( is_page('home') && $the_query->have_posts() ){ //run the loop with these parameters
        // The Loop
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<p class="about-text">' . get_the_excerpt() . '</p>';
            echo '<a class="gallery-entry-read-more" href="' . get_permalink() . '">Read More</a>';
        }
        wp_reset_postdata(); //reset

    }
}

// function flexsliderGallery() {
//
//   global $post;
//
//   $attachments = get_children(array(
//     'post-parent' => $post->ID,
//     'order' => 'ASC',
//     'orderby' => 'menu_order',
//     'post_type' => 'attachment',
//     'post_mime_type' => 'image'
//   ));
//
//   if($attachments) {
//     echo '<div class="flexslider">';
//     echo '<ul class="slides">';
//
//     foreach($attachments as $attachment_id => $attachment){
//         echo '<li>';
//         echo wp_get_attachment_image($attachment_id);
//         echo '</li>';
//
//     }
//     echo '</ul>';
//     echo '</div>';
//   }
// }//end flexsliderGallery
function add_flexslider() { // display attachment images as a flexslider gallery on single posting

    global $post; // don't forget to make this a global variable inside your function

    $attachments = get_children(array('post_parent' => $post->ID, 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image', ));

    if ($attachments) { // if there are images attached to posting, start the flexslider markup

        echo '<div class="flexslider">';
        echo '<ul class="slides" id="">';

        foreach ( $attachments as $attachment_id => $attachment ) { // create the list items for images with captions

            echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');

            echo '</li>';

        }

        echo '</ul>';
        echo '</div>';

    } // end see if images

} // end add flexslider
