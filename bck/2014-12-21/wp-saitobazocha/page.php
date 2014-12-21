<?php get_header(); ?>
		<!-- row2 -->
		<div class="row">
			<div class="span12 teaser">
				<h1><?php the_title(); ?></h1>
			</div>
			<!-- end span12 -->
		</div>
		<!-- end row 2-->
	</div>
	<!-- end container -->
</header>   
<!-- end header -->
<!-- page content -->
<section class="page singlepage">
	<div class="container">
		<div class="row">
			<!-- blog -->
			<div class="blog-wrapper blog-single-post span8">
				<!-- post -->
				<div class="post gallery-post">
					<!-- meta -->
					<div class="meta">
						<?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p id="breadcrumbs">','</p>'); } ?>
					</div>
					<!-- end meta -->
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<!-- content -->
					<div class="post-content content-section">
						<div class="content clearfix">
								<?php the_content(); // Dynamic Content ?>
						</div>
						<!-- end post content -->
					</div>
					<!-- end content -->
					<?php endwhile; ?><?php else: ?>
						<!-- article -->
						<div class="post-content content-section">
						<h1 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
						</div>
						<!-- /article -->
					<?php endif; ?>
				</div>
				<!-- end post -->
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