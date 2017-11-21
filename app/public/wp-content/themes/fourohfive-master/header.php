<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package fourohfive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>


	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body class="sticky-footer">

	<a class="sr-only" href="#content"><?php echo 'Skip to content'; ?></a>



	<?php
		/**
		 * Don't delete that div — it acts as an anchor for the skip-nav above.
		 * We close it at the start of our footer.php fie.
		 */
	?>
	<div id="content">
