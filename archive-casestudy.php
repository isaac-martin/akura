<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>

    				<?php get_template_part( 'content', 'page' ); ?>

    				<?php
    					// If comments are open or we have at least one comment, load up the comment template
    					if ( comments_open() || get_comments_number() ) :
    						comments_template();
    					endif;
    				?>

    		<?php endwhile; // end of the loop. ?>

            <?php wp_reset_postdata(); ?>

    		<?php

            $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 9 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

    			<?php
    				// If comments are open or we have at least one comment, load up the comment template
    				if ( comments_open() || get_comments_number() ) :
    					comments_template();
    				endif;
    			?>

    		<?php endwhile; // end of the loop. ?>

            <?php wp_reset_postdata(); ?>





<?php get_footer(); ?>
