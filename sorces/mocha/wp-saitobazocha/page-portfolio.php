<?php /* Template Name: Portfolio */ get_header(); ?>
		<!-- row2 -->
		<div class="row">
			<div class="span12 teaser">
				<h2>Моё портфолио</h2>
				<p>Работаю в первую очередь что бы получать удовольствие от результата - вёрстка одно из моих любимых занятий, поэтому стремлюсь к совершенству</p>
			</div>
			<!-- end span12 -->
		</div>
		<!-- end row 2-->
	</div>
	<!-- end container -->
</header>   
<!-- end header -->

<!-- page content -->
<section class="page portfolio-page-wrapper">
 	<div class="container">
		<div class="row">
			<!-- sort list -->
			<div class="portfolio-sortlist span12">
					<ul>
						<li><a href="#" data-sort="*">Все</a></li>
						<li><a href="#" data-sort="tag-htmel">HTML/CSS</a></li>
						<li><a href="#" data-sort="tag-sewo">WordPress</a></li>
						<li><a href="#" data-sort="tag-gnome">Landing Page</a></li>
					</ul>
			</div>
			<!-- end sortlist -->
			<!-- portoflio  -->
			<div class="portfolio-page">
				<?php query_posts("showposts=30&cat=75"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<!-- portfolio item -->
					<div <?php post_class('span4 portfolio-item'); ?>>
						 <!-- post thumbnail -->
						<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail(array(370,370)); // Declare pixel size you need inside the array ?>
							</a>
						<?php else: ?>
							<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
						<?php endif; ?>
						<!-- /post thumbnail -->

						<!-- title -->
						<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?> <br /> <span class="meta"><?php
$posttags = wp_get_post_terms( get_the_ID() , 'post_tag' , 'fields=names' );
if( $posttags ) echo implode( ', ' , $posttags );
?></span></a>

						<!-- icon -->
						<a rel="nofollow" href="<?php the_permalink(); ?>" class="icon"></a>
					</div>
					<!-- end portfolio item -->

				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- end portfolio wrapper -->
		</div>
		<!-- end row -->
	</div>
	<!-- end container -->
</section>
<!-- end page content -->
<?php get_footer(); ?>