<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
			
		<!-- css + javascript -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
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
							<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Mocha"></a>
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