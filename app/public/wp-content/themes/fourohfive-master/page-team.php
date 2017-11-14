<?php
/**
 * Template Name: Team
 */

get_header(); ?>


<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'team' );

	endwhile;
?>


<?php
// get_sidebar();
get_footer();
