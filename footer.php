<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package OysterPointDragons
 * @subpackage Oyster_Point_Dragons
 * @since Oyster Point Dragons 1.0
 */
?>
</div><!-- #main .wrapper -->

	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'oysterpointdragons_credits' ); ?>
			<a href="<?php echo esc_url( __( 'https://OysterPointDragons.org/', 'oysterpointdragons' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'oysterpointdragons' ); ?>"><?php printf( __( 'Proudly powered by %s', 'oysterpointdragons' ), 'Oyster Point Dragons' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>