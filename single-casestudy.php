<?php get_header(); ?>

	<div id="dots-cont">
		<span class="left-arrow"><i class="icon-left-open-big"></i></span>
		<div id="owlDots" class="owl-dots">
		</div>
		<span class="right-arrow"><i class="icon-right-open-big"></i></span>
		<span class="fullscreen"><i class="switcher icon-plus"></i></span>

	</div>




	<div class="container hide-elements case-single-wrap">
		<div class="col-md-5 top-layer hide-elements case-text-wrap">
			<h1 class="casestudy-title hide-elements"><?php the_title(); ?></h1>
			<h3 class="casestudy-location hide-elements"><?php the_field('location'); ?></h3>
			<div class="case-text"><?php the_field('text'); ?></div>
			<?php if( get_field('pdf') ): ?>
			<a class="desktop" target="_blank" href="<?php the_field('pdf'); ?>" download>
				<img src="<?php echo get_template_directory_uri(); ?>/img/pdf-dl.png" alt="Logo" class="pdf-dl hide-elements">
			</a>
			<?php endif; ?>

		</div>
	</div>

	<div class="cat-tri hide-elements desktop"></div>
	<section class="cat-tri-inner hide-elements desktop">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mono-logo.png" alt="Logo" class="mono-logo hide-elements">
			<h3><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></h3>
		</section>


	<div class="tri-image-container">
		<div class="case-slider owl-carousel">
			<?php
		if( have_rows('gallery') ):
		while ( have_rows('gallery') ) : the_row();
		?>
		<div class="slides" style="background-image: url(<?php the_sub_field('image'); ?>);">
		</div>

		 <?php endwhile;
		endif;

		?>
		</div>
		<div class="triangles desktop yellow hide-elements"></div>
	</div>

<?php get_footer(); ?>



<?php get_header(); ?>










<?php get_footer(); ?>
