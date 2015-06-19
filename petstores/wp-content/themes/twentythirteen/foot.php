<?php
/**
 * Template Name: foot
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<p><?php printf( 'All Rights Reserved @ 2014 powered by '); ?><a href="<?php echo esc_url( __( 'https://www.facebook.com/lohithmintu', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf(  'Lohith Sunchu' ); ?></a></p>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
