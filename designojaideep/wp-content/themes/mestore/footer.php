<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mestore
 */

?>
	</div>
	<!-- Begin Footer Section -->
	<footer id="footer">
		<?php
			if ( is_active_sidebar( 'footer-1' ) ) :
				?>
					<div class="footer-widgets-wrapper">
						<div class="<?php echo esc_attr(MESTORE_CONTAINER_CLASS) ?>">
							<div class="row">
								<div class="footer-widgets-wrapper">
					                	<?php get_sidebar( 'footer' ); ?>
					            </div>
					        </div>
					        
					    </div>
					</div>
				<?php
			endif;
		?>
		<div class="footer-copyrights-wrapper">
			<div class="<?php echo esc_attr(MESTORE_CONTAINER_CLASS) ?>">
				<?php
			        /**
			         * Hook - mestore_action_footer.
			         *
			         * @hooked mestore_footer_copyrights - 10
			         */
			        do_action( 'mestore_action_footer' );
		        ?>
		    </div>
		</div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>