<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mediaclature
 */

get_header();
get_sidebar();
?>

	<main id="primary" class="site-main">

		<?php
		$i = 0;
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type(), array( 'i' => $i ) );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mediaclature' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mediaclature' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			$i += 1;
		endwhile; // End of the loop.
		?>
	</main><!-- #main -->

<?php
get_footer();
