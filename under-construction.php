<style>

body { background-color: #050708;
	font-family: 'Arial', sans-serif;
	color: #fff;
}


	h1 {
		font-size: 35px;
		line-height: 35px;
		font-weight: 300;
		text-transform: uppercase;
	}


p { color: #fff;
	line-height: 30px;
	font-size: 20px;
}

.symbol {
	position: fixed;
	z-index: -1;
	top:0;
	right: 0;
	height:100%;
}

.img-logo-lockup {
	position: fixed;
	left:50px;
	bottom: 50px;
	width: 360px;
}

a {
	color: #fff;
	text-decoration: none;
}

.text-cont {
	position: absolute;
	display: inline-block;
	left:50px;
	top: 170px;
	max-width: 470px;
}

</style>


<div class="text-cont">
	<h1 class="margin-off">Welcome To Akura</h1>
	<div class="content-wrapper content-wrapper-490">
	<p>We have just developed our new brand identity and are currently preparing our website. In the meantime you may contact us on: <br>
T: 02 6324 5335 <br>
E: <a href="mailto:admin@akura.com.au">admin@akura.com.au</a> <br>
Thank you for your interest.</p>
	</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/akura-logo.png" class="img-logo-lockup" alt="img-logo-lockup" />

		<img src="<?php echo get_template_directory_uri(); ?>/img/background.png" class="symbol" />
	</div>

<?php get_footer()?>
