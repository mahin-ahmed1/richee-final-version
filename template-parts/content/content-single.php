<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package richee
 */

?>
<div class="row">
	<article class="col-lg-8 col-md-7 col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">

		<?php echo '<h2>'.get_the_title().'</h2>';?>
		<div class="richee-post-meta">
				<span><?php echo get_the_date();?> |</span>
				<span><?php echo get_the_author();?> |</span>
				<?php $richee_post_cats=get_the_category();
				foreach($richee_post_cats as $richee_cat){
					echo '<span>'.$richee_cat->name.', </span>';
				}
				?> 
			</div>
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Post title. Only visible to screen readers. */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'richee' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'richee' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->




</article><!-- #post-<?php the_ID(); ?> -->

	<div class="col-md-5 col-lg-4">
		<div class="sidebar">
			<?php if(is_active_sidebar('richee_blog_sidebar')){
				dynamic_sidebar('richee_blog_sidebar');
			}
			?>
		</div>
	</div>

</div>
