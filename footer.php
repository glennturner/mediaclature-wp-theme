<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mediaclature
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php
			/* Super dumb way to get the main author, but it's fine for now. */
			$user = get_user_by( 'id', 1 );

			if ( $user ):
			?>
			<span class="author-info">
				Authored by <a href="<?php esc_html_e( $user->url ); ?>" rel="external"><?php

					esc_html_e( $user->first_name . ' ' . $user->last_name );
				?></a>
			</span>
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
