
<?php /* Template Name: Contact Page Template */ get_header(); ?>
	<div class="container contact-wrap">
		<div class="col-md-4">

			<h2><?php the_field('subheading'); ?></h2>
			<p class="stencil"><?php the_field('text'); ?></p>

		</div>


		<div class="col-md-8 form-wrapper">

			<?php echo do_shortcode('[contact-form-7 id="79" title="Contact Form"]'); ?>


			<div class="underform-text">
				<?php the_field('contact_details_under_form'); ?>
			</div>
		</div>

<div class="col-md-12 copy-text">
		<p class="copyright-text">Copyright <?php the_date('Y') ?> Akura Pty Limited</p>
</div>



	</div>
<?php get_footer(); ?>
