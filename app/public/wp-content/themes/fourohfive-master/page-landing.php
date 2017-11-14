<?php
/**
 * Template Name: Landing
 */

get_header(); ?>


<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'landing' );

	endwhile;
?>


<?php
// get_sidebar();
get_footer();
