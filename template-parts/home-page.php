<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moneyadvisor
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content">
		<?php
		the_content();

		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
