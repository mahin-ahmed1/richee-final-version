<?php
/**
 * The template for displaying the footer
 *
 *
 * @package richee
 */

?>
	</div><!-- #content -->
	<!-- FOOTER AREA STARTED -->
	<footer class="footer-area">
		<div class="row align-items-center">
			<div class="col-12">
				
				<?php 
				$richee_footer_copyright=get_theme_mod('copy_text');
				if($richee_footer_copyright){
					echo '<p>'.esc_html($richee_footer_copyright).'</p>';
				}else{
					echo '<p>'.esc_html__('Design & Developed By Mahin','richee').'</p>';
				}
				?>

			</div>
		</div>
	</footer>
	<!-- FOOTER AREA END -->

</div><!-- #page -->	
<?php wp_footer(); ?>

</body>
</html>
