<?php get_header(); ?>
		<!-- row2 -->
		<div class="row">
			<div class="span12 teaser">
						<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
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
				<?php echo ddsg_create_sitemap(); ?>
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