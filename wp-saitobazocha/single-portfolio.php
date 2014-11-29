<?php
/*
Template Name Posts: Portfolio Single
*/
get_header(); ?>
		<!-- row2 -->
		<div class="row">
			<div class="span12 teaser port-descr">
			   <h1><?php the_title(); ?></h1>
			   <p><? echo get_post_meta($post->ID, 'short-description', true); ?></p>
			</div>
			<!-- end span12 -->
		</div>
		<!-- end row 2-->
	</div>
	<!-- end container -->
</header>   
<!-- end header -->


<!-- page content -->
<section class="page single-portfolio-item">
	<div class="container">
		<div class="row clearfix">
			<!-- item content -->
			<div class="item-content post-content">
				<!-- slider -->
				<div class="span8">
					<div class="flexslider portfolio-slider-wrapper">
						<ul class="slides">
							<li class="slidebox"><a rel="lightbox" href="<?php the_field('slide1'); ?>"><img src="<?php the_field('slide1'); ?>" alt="<?php the_title(); ?>"></a></li>
							<li class="slidebox"><a rel="lightbox" href="<?php the_field('slide2'); ?>"><img src="<?php the_field('slide2'); ?>" alt="<?php the_title(); ?>"></a></li>
						</ul>
					</div>
					<!-- end slider -->
				</div>
				<!-- end span8 -->

				<!-- content -->
				<div class="content span4">
					<!-- item meta -->
					<div class="item-meta">
						<dl>
							<dt>Клиент:</dt>
							<dd><?php the_field('clients'); ?></dd>
							<dt>Дата:</dt>
							<dd><?php the_field('pholiodate'); ?></dd>
							<dt>Использовал знания:</dt>
							<dd><?php the_field('skils'); ?></dd>
							<dt>Результат:</dt>
							<dd><?php the_field('result'); ?></dd>
						</dl>
					</div>
					<!-- end item meta -->
				</div>
				<!-- end content -->

			</div>
			<!-- end item content -->
			<!-- item content -->
			<div class="item-content post-content">
				<div class="content span12">
					<div class="margin"></div>
					<?php the_content(); // Dynamic Content ?>
				</div>
			</div>
			<!-- end item content -->


			<!-- related works -->
			<div class="related-works span12 clearfix">
				<h3 class="span12 related-title">Ещё немного из качественной верстки</h3>
				<div class="slider-pagination">
					<a href="#" class="prev"></a>
					<a href="#" class="next"></a>
				</div>

				<div class="related-works-wrapper portfolio-slider">
					<?php query_posts("showposts=30&cat=569&orderby=rand"); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					
					<!-- portfolio item -->
					<div class=" slide portfolio-item illustration">
						 <!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('thumbnail'); // Declare pixel size you need inside the array ?>
							</a>
						<?php else: ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
						<!-- /post thumbnail -->
					   <!-- title -->
						<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> <br /> <span class="meta"><?php $posttags = wp_get_post_terms( get_the_ID() , 'post_tag' , 'fields=names' );
						if( $posttags ) echo implode( ', ' , $posttags ); ?></span></a>
						<!-- icon -->
						<!-- noindex --><a rel="nofollow" href="<?php the_permalink(); ?>" class="icon"></a><!-- /noindex -->
					</div>
					<!-- end portfolio item -->
					
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<!-- end related works wrapper -->
			</div>
			<!-- end related works -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end page content -->
<?php get_footer(); ?>