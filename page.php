<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package richee
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php if(display_header_text()==true):?>
			<h2 class="text-center entry-title text-capitalize"><?php echo get_bloginfo('name');?></h2>
			<h2 class="text-center entry-title text-capitalize"><?php echo get_bloginfo('description');?></h2>
		<?php
		endif;
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
