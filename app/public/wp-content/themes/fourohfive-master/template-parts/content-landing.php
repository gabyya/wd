<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>
	
<?php the_title( '<h1>', '</h1>' ); ?>
	
<?php the_content();?>

<?php

			the_field('product_description_title'); 
			the_field('product_description');


			// check if the repeater field has rows of data
			if( have_rows('product_description') ):

			 	// loop through the rows of data
			    while ( have_rows('product_description') ) : product_description(); ?>


<!-- displaying the sub field of data  -->
			        <h2>
			        	<?php the_sub_field('product_description_title'); ?>
			        </h2>
			        <p>
			        	<?php the_sub_field('product_description'); ?>
			        </p>
			      


			    <?php endwhile;

			else :

			    // no rows found

			endif;

			?>