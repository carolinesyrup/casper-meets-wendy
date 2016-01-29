<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Casper_Meets_Wendy
 */

?>

	</div><!-- #content -->

	<div class="footer-nav">
	<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
	<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			Powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'casper-meets-wendy' ) ); ?>"><?php printf( esc_html__( '%s', 'casper-meets-wendy' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			Built with <a href="<?php echo esc_url( __( 'http://github.com/carolinesyrup' ) ); ?>"><?php printf( esc_html__( '%s', 'casper-meets-wendy' ), 'Casper Meets Wendy' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
