<?php 
/* Template Name: Homepage */

get_header('home');
?>
<div class="wrapper">
    <div class="container">
        <div class="row">
        <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/home', 'page' );

		endwhile; // End of the loop.
		?>

        </div>
    </div>
</div>



<?php
get_footer();
?>
