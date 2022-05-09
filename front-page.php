<?php
/**
 * The template for displaying front page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KS_Ozimek
 */

get_header('front');
?>

	<main id="primary" class="site-main">
	
	<?php 
    get_template_part('template-sections/home'); 
    ?>

	</main><!-- #main -->