<?php /* Template Name: Text Page Template */ get_header(); ?>

<div class="desktop tri-image-container">
	<div class="triangles"></div>
	<img class="tri-image" src="<?php the_field('bg_image'); ?>">
</div>


	<div class="container text-wrapper">
		<div class="col-md-5 top-layer">

		<h1><?php the_field('subtitle'); ?></h1>
		<p><?php the_field('text'); ?></p>

		</div>
	</div>


<?php get_footer(); ?>
