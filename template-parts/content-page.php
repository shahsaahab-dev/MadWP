<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moneyadvisor
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
		<?php the_title( '<h3 class="section-title">', '</h3>' ); ?>
		<div class="breadcrumbs">
         <li><a href="<?php esc_url(bloginfo('url')); ?>">Home</a><span>&gt;</span><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></li>
        </div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();?>
	
	</div><!-- .entry-content -->

	
</div><!-- #post-<?php the_ID(); ?> -->
