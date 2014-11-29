<?php get_header(); ?>
				<!-- row2 -->
				<div class="row">
                    <div class="home-slider span12">
						<div class="m-slider flexslider">
							<ul class="slides">
								<li> 
									<div class="slide">
											<h2>Скидка на Зеброид</h2>
											<p>We work with individuals and businesses of all sizes to bring ideas to life through thoughtful client-oriented design solutions.</p>
											<a href="portfolio.html" class="button">Go To Portfolio</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Верстка сайтов</h2>
											<p>Curabitur hendrerit pretium ornare. Vivamus sed nulla sapien, eu pulvinar dolor. Donec odio est, vestibulum at pulvinar.</p>
											<a href="portfolio.html" class="button">Go To Portfolio</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Скидка на КД</h2>
											<p>Curabitur hendrerit pretium ornare. Vivamus sed nulla sapien, eu pulvinar dolor. Donec odio est, vestibulum at pulvinar.</p>
											<a href="portfolio.html" class="button">Go To Portfolio</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Парсинг сайтов</h2>
											<p>Curabitur hendrerit pretium ornare. Vivamus sed nulla sapien, eu pulvinar dolor. Donec odio est, vestibulum at pulvinar.</p>
											<a href="portfolio.html" class="button">Go To Portfolio</a>
									</div>
									<!-- end slide -->
								</li>
							</ul>
						</div><!-- end m slider -->
					</div><!-- end home slider -->
				</div>
				<!-- end row 2-->
            </div>
            <!-- end container -->
</header>   
<!-- end header -->

<!-- portfolio -->
<section class="portfolio-wrapper alt-section">
	<div class="container">
		<div class="row home-portfolio-wrapper">
			<!-- section title -->
			<div class="section-title span12">
				<h2>Моё портфолио верстки</h2>
				<a href="#" class="section-link">К работам</a>
			</div>
			<!-- end section title -->
			<div class="home-portfolio-pagination">
				<a href="#" class="prev"></a>
				<a href="#" class="next"></a>
			</div>
			 <div class="clearfix"></div>
			<!-- portfolio items -->
			<div class="portfolio-slider content-wrapper">
				<?php query_posts("showposts=5&cat=76"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<!-- portfolio item -->
				<div class="span6 portfolio-item">
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail(array(570,570)); // Declare pixel size you need inside the array ?>
						</a>
					<?php else: ?>
						<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<!-- title -->
					<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> <br /> <span class="meta"><?php the_tags( __( '' ), ', ', ''); ?></span></a>
					<!-- icon -->
					<a rel="nofollow" href="<?php the_permalink(); ?>" class="icon"></a>
				</div>
				<!-- end portfolio item -->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- end portfolio items -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end portfolio -->

<!-- page content -->
<section class="page">
	<div class="container">
		<div class="row">
 			<!-- section title -->
			<div class="section-title home-last-articles span12">
				<h4>Последние записи</h4>
				<a href="#" class="section-link">Перейти в блог</a>
			</div>
			<!-- end section title -->
			<!-- content / blog -->
			<div class="content-wrapper blog-grid">
				<?php query_posts("showposts=3&cat=75"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="span4 blog-item">
					<!-- post image -->
					<div class="post-image">
						<!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(370,370)); // Declare pixel size you need inside the array ?>
							</a>
						<?php else: ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
						<!-- /post thumbnail -->
						<!-- icon -->
						<a rel="nofollow" href="<?php the_permalink(); ?>" class="icon"></a>
					</div>
					<!-- end post image -->
					<!-- post excerpt -->
					<div class="post-excerpt">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<?php html5wp_excerpt('html5wp_index'); ?>
					</div>
					<!-- end post excerpt -->
				</div>
				<!-- end blog item -->
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- end content wrapper -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end page content -->
<?php get_footer(); ?>