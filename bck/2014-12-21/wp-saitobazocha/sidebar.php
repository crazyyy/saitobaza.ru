<!-- sidebar -->
<div id="sidebar" class="sidebar span4">
	<div class="widgets-wrapper">

	<!-- widget -->
		<div class="widget">
			<h4>Адовы клиенты</h4>
			<div class="widget-content">
				<?php quotescollection_quote(); ?>
				<!-- end works wrapper -->
			</div>
			<!-- end widget content -->
		</div>
		<!-- end widget -->
		
		<div class="widget">
				<h4>Рубрики</h4>
				<!-- widget content -->
				<div class="widget-content">
					<?php html5sidebar_nav(); ?>
				</div>
				<!-- end widget content -->
		</div>
		<!-- end widget -->

		<!-- widget -->
		<div class="widget">
			<h4>Свеженькое в блоге</h4>
			<div class="widget-content clearfix">
				<?php query_posts("showposts=5&cat=-569"); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="recent-post-tab clearfix">
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
						<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('thumbnail'); ?>
						</a>
					<?php else: ?>
						<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
					<?php endif; ?>
					<!-- /post thumbnail -->
					<span><?php the_time('j.m.Y'); ?></span> <br>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
				<!-- end post -->	
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
			</div>
			<!-- end widget content -->
		</div>
		<!-- end widget -->

	</div>
	<!-- end widgets wrapper -->
</div>
<!-- end sidebar -->