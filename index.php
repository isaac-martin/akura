<?php get_header(); ?>

		<div class="container blog-wrapper">

			<!-- <h1><?php _e( 'Akura Blog', 'html5blank' ); ?></h1> -->

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</div>


<?php get_footer(); ?>
