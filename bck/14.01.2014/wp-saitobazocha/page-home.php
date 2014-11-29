<?php /* Template Name: Home */ get_header(); ?>
				<!-- row2 -->
				<div class="row">
                    <div class="home-slider span12">
						<div class="m-slider flexslider">
							<ul class="slides">
								<li> 
									<div class="slide">
											<h2>Скидка на Зеброид</h2>
											<p>Я лучший диллер Zebroid, один из первых пользователей и предоставляю максимальную скидку и самые выгдные условия для покупки</p>
											<a href="http://saitobaza.ru/skidka-na-zebroid.htm" class="button">перейти к скидкам</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Верстка сайтов</h2>
											<p>Качественная, дивная, валидная вертска сайтов. Интеграция на движок. Умеренные цены. Вам это нужно?</p>
											<a href="http://saitobaza.ru/uslugi/verstka/forma-zayavki-na-verstku-sajta-i-natyazhku-na-cms.htm" class="button">заказать верстку</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Скидка на КД</h2>
											<p>Спарсил и сгенерировал уже сотни сателлитов и тысячи дорвеев. Content Downloader мой любимый парсер, предоставляю диллерскую скидку на его покупку</p>
											<a href="http://saitobaza.ru/skidka-na-parser-kontenta-content-downloader.htm" class="button">получить скидку</a>
									</div>
									<!-- end slide -->
								</li>
								<li>
									<div class="slide">
											<h2>Парсинг сайтов</h2>
											<p>Нужно наполнить интернет магазин? Срочно создать сателлиты? Перенести контент с одного сайта на другой? </p>
											<a href="http://saitobaza.ru/uslugi/parsing.htm" class="button">тогда вам нужны услуги парсинга</a>
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
				<?php query_posts("showposts=5&cat=569"); ?>
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
				<h4>Последнее в блоге</h4>
				<a href="#" class="section-link">Перейти в блог</a>
			</div>
			<!-- end section title -->
			<!-- content / blog -->
			<div class="content-wrapper blog-grid">
				<?php query_posts("showposts=3&cat=-569"); ?>
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