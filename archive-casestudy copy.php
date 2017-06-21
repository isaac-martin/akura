<?php get_header(); ?>
<div class="container text-wrapper">

	<h2><?php the_field('page_title','64'); ?></h2>



<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<div class="col-md-3 col-sm-6 case-single">
	<a class="link-overlay" href="<?php the_permalink(); ?>">
		<div class="case-cont">
			<img src="<?php the_field('thumbnail'); ?>" alt="">

	                <div class="case-details overlay">
						<h4>
							<?php the_title(); ?><br>
							<?php the_field('location'); ?>
						</h4>
					</div>

        </div>
    </a>
</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>


<?php endif; ?>



<?php get_footer(); ?>
