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
							<div class="gadc-content">
								
							</div>
							<!-- /.gadc-content -->
								<?php the_content(); // Dynamic Content ?>
								<script>
								//uptolike share begin
								(function(d,c){
								  var up=d.createElement('script'),
								  s=d.getElementsByTagName('script')[0],
								  r=Math.floor(Math.random() * 1000000);
								  var cmp = c + Math.floor(Math.random() * 10000);
								  var url = window.location.href;
								  window["__uptolike_widgets_settings_"+cmp] = {};
								  d.write("<div id='"+cmp+"' class='__uptlk' data-uptlkwdgtId='"+r+"'></div>");
								  up.type = 'text/javascript'; up.async = true;
								  up.src = "//w.uptolike.com/widgets/v1/widgets.js?b=fb.tw.ok.vk.gp.mr&id=41509&o=1&m=1&sf=1&ss=2&sst=1&c1=ededed&c1a=0.0&c3=ff9300&mc=1&c2=000000&c4=ffffff&c4a=1.0&mcs=0&sel=1&fol=0&c=" + cmp + "&url="+encodeURIComponent(url);
								  s.parentNode.insertBefore(up, s);
								})(document,"__uptlk");
								//uptolike share end
								</script>
						</div>
						<!-- end post content -->
					</div>
					<!-- end content -->
					<?php comments_template(); ?>
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