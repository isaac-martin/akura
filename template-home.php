<?php /* Template Name: Home Page Template */ get_header(); ?>
<div class="container home-wrap">
	<h4 class="tagline vid-show">Design + Construct + Manage&nbsp;&nbsp;&nbsp;<span class="yellow">|&nbsp;&nbsp;&nbsp;Experience Saves</span></h4>
	<video id="video">
		<source src="<?php echo get_template_directory_uri(); ?>/vid/2/akuraWEBM.webm" type="video/webm"></source>
		<source src="<?php echo get_template_directory_uri(); ?>/vid/2/akuraOGG.ogg" type="video/ogg"></source>
		<source src="<?php echo get_template_directory_uri(); ?>/vid/2/akuraMP4.mp4" type="video/mp4"></source>
	</video>

	<h4 class="mob-tagline vid-hide"><span class="reveal1">Design</span> <span class="reveal2">+ Construct </span><span class="reveal3">+ Manage&nbsp;&nbsp;&nbsp;</span><span class="yellow reveal4">|&nbsp;&nbsp;&nbsp;Experience Saves</span></h4>
	<div id="fullpage" class="vid-hide home-images">
		<div class="home-image-container section">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mob_home/1.png">
			<p class="scroll-down">Scroll Down To Begin.</p>
		</div>
		<div class="home-image-container section trigger2">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mob_home/2.png">
		</div>
		<div class="home-image-container section trigger3">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mob_home/3.png">
		</div>
		<div class="home-image-container section trigger4">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mob_home/4.png">

		</div>
	</div>

</div>

<?php get_footer(); ?>
