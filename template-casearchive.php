<?php /* Template Name: Case Study Archive Template */  get_header();

$categories = get_categories(); ?>



<div class="container text-wrapper">
<h2 class="pad-15"><?php the_field('page_title'); ?></h2>

<!--
	<div class="filter-wrapper">
		<ul id="category-menu">
			<li class="all active">All</li>
			 <?php foreach ( $categories as $cat ) { ?>
			 	<li data-category="<?php echo $cat->term_id; ?>"><?php echo $cat->name; ?></li>
			 <?php } ?>
		</ul>
	</div>
-->
<div class="ajax-wrapper">
	<div id="post-content">

	<?php $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
 $args = array( 'post_type' => 'casestudy',
					'posts_per_page' => 4,
					'orderby' => 'title',
					'order' => 'ASC',
					 'paged' => $paged
					);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
 ?>


		<div class="col-md-3 col-sm-6 case-single <?php
     foreach((get_the_category()) as $category) {
        echo ' cat-' . $category->cat_ID . '';
    }?> ">
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

<?php wp_reset_query(); ?>



<?php if ($loop->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
<div class="col-md-12">
<div id="pagination">
	<div class="inner">
	      <?php  global $loop;
	    $big = 999999999;
	    echo paginate_links(array(
	        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
	        'format' => '?paged=%#%',
	        'current' => max(1, get_query_var('paged')),
	        'total' => $loop->max_num_pages,
	        'prev_next'          => True,
			'prev_text'          => __('Newer Case Studies'),
			'next_text'          => __('Older Case Studies')
	    ));
	    ?>
	</div>
</div>
</div>
<?php } ?>
</div>
</div>

<?php get_footer(); ?>
