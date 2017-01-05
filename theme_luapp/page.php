<?php

/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 *
 * @package WordPress
 * @subpackage Theme_Luapp
 * @author Descubra
 * @since Theme Luapp 1.0
 */

get_header(); ?>

<div id="main">
	<?php
		while (have_posts()) : the_post();

		// Include the page content template.
		get_template_part( 'template-parts/content', 'none' );

		endwhile;
	?>
</div>

<?php get_footer(); ?>
