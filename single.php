<?php get_header(); ?>

<div class="container text-wrapper">
	<div class="col-md-8 top-layer">
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>

			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>

			<?php the_content(); // Dynamic Content ?>

		<?php endwhile; ?>
				<?php endif; ?>

	</div>
</div>



<?php get_footer(); ?>
