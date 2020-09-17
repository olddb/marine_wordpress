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
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link rel="stylesheet" id="neve-google-font-adamina-css" href="//fonts.googleapis.com/css?family=Adamina%3A600%2C400&amp;ver=5.4" type="text/css" media="all">
		<?php wp_head(); ?>
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

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

				<div class="head-container">
					<div class="normalize">
						<div class="head-content">
							<a href="<?php echo get_home_url(); ?>">
								<div class="head-img">
									<img src="<?php echo get_template_directory_uri(); ?>/img/grosse-tete.jpg" alt="Logo" class="logo-img">
								</div>
								<?php // echo the_custom_logo(); ?>
								<div class="head-text">
									<div class="title-name">
										Marine Jeannin
									</div>
									<div class="subtitle">
										Journaliste freelance
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>

			</header>
			<!-- /header -->

<!-- 
<div class="logo">
	<a href="<?php // echo home_url(); ?>">
		svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script
		<img src="<?php // echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
	</a>
</div>



<nav class="nav" role="navigation">
<?php // html5blank_nav(); ?>
</nav>
-->
