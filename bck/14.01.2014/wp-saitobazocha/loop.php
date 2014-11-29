<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- post -->
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<!-- post image / gallery -->
		<div class="post-image">
			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a class="featureimg" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
				</a>
			<?php else: ?>
				<a class="featureimg" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
			<?php endif; ?>
			<!-- /post thumbnail -->
		</div>
		<!-- end gallery / post image -->

		<!-- meta -->
		<div class="meta">
			<p><!-- noindex --><?php _e( 'Рубрика: ', 'html5blank' ); the_category(', '); ?><!-- /noindex --> <span class="dash">/</span> <?php the_time('j.m.Y'); ?> <span class="dash">/</span> <!-- noindex --><?php comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?><!-- /noindex --></span></p>
		</div>
		<!-- end meta -->
		<!-- content -->
		<div class="post-content">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<div class="content short-content">
					<?php html5wp_excerpt('html5wp_custom_post');  ?>
			</div>
			<!-- end post content -->
			<!-- read more --><!-- noindex --><a href="<?php the_permalink(); ?>" rel="nofollow" class="mocha-button">Продолжить чтение</a><!-- /noindex -->
		</div>
		<!-- end content -->
	</div>
	<!-- end post -->
<?php endwhile; ?><?php else: ?>
	<!-- article -->
	<div class="post">
		<h2 class="title"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</div>
	<!-- /article -->
<?php endif; ?>