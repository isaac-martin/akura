<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/ie.css">
		<![endif]-->
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>



			<!-- header -->
			<header class="desktop header clear hide-elements" role="banner">
				<div id="header-tri"></div>
				<div class="header-inner">
					<div class="container">
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
					</div>
				</div>
			</header>


			<header class="mobile-header mobile hide-elements">
							<a href="<?php echo home_url(); ?>">
								<img class="mobile-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>

							<div id="nav-icon">
							  <span></span>
							  <span></span>
							  <span></span>
							  <span></span>
							</div>
			</header>

			<div class="mobile-menu mobile">
						<nav class="mobile-nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
			</div>


			<!-- /header -->
