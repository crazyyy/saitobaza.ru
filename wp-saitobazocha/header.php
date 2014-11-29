<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- icons -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-60x60.png" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon-16x16.png" sizes="16x16" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="msapplication-square70x70logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="<?php echo get_template_directory_uri(); ?>/img/icons/mstile-310x150.png" />
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
		<script>
		!function(){
			// configure legacy, retina, touch requirements @ conditionizr.com
			conditionizr()
		}()
		</script>
</head>
<body <?php body_class('body-container preload'); ?>>
	<!-- header -->
	<header id="mocha-head" class="header">
		<!-- Background -->
		<div class="background-image"></div>
            <!-- container -->
            <div class="container">
				<!-- row1  -->
				<div class="row">
					<div class="span12">
						<div class="logo">
							<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>"></a>
						</div>
						<!-- end logo -->
						<!-- nav -->
						<nav class="menu">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- end nav -->
					</div>
					<!-- end span12 -->
				</div>
				<!-- end row 1-->