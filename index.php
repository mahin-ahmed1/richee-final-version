<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 */

get_header();
?>

	<div id="primary" class="content-area row">

		<main id="main" class="site-main col-lg-8 col-md-7 col-12">
		
			<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content/content' );
			}

			// Previous/next page navigation.
			richee_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

			}
		?>

		</main><!-- .site-main -->
		
		<div class="sidebar col-md-5 col-lg-4">
			<?php if(is_active_sidebar('richee_blog_sidebar')){
				dynamic_sidebar('richee_blog_sidebar');
			}
			?>
		</div>
	</div><!-- .content-area -->

<?php
get_footer();
