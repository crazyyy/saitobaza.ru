<?php get_header(); ?>
		<!-- row2 -->
		<div class="row">
			<div class="span12 teaser">
						<h1><?php the_category(', '); ?></h1>
						<p><?php echo category_description(); ?></p>
			</div>
			<!-- end span12 -->
		</div>
		<!-- end row 2-->
	</div>
	<!-- end container -->
</header>   
<!-- end header -->


<!-- page content -->
<section class="page">
	<div class="container">
		<div class="row">
			<!-- blog -->
			<div class="blog-wrapper span8">
				<?php get_template_part('loop'); ?>
				<!-- pagination -->
				<div class="pagination">
					<div class="links">
						<?php get_template_part('pagination'); ?>
					</div>
					<!-- end links -->
					<!-- nav -->
					<div class="navigaiton">
						<?php previous_posts_link(__('')) ?>
						<?php next_posts_link(__('')) ?>
					</div>
					<!-- end navigaiton -->
				</div>
				<!-- end pagination -->
			</div>
			<!-- end blog -->
		<?php get_sidebar(); ?>
	</div>
	<!-- end row -->
</div>
<!-- end container -->
</section>
<!-- end page content -->
<?php get_footer(); ?>