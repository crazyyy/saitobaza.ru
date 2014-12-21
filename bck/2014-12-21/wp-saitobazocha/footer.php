<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
    
			<!-- widgets wrapper -->
			<div class="widgets-wrapper">
				<!-- widget -->
				<div class="span4 widget">
					<h3>Последние работы</h3>        
					<!-- widget content -->
					<div class="widget-content">
						<!-- flickr -->
						<div class="flickr">
							<?php query_posts("showposts=12&cat=569"); ?>
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- post thumbnail -->
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
								<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_post_thumbnail('thumbnail'); ?>
								</a>
							<?php else: ?>
								<a class="image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>" /></a>
							<?php endif; ?>
							<!-- /post thumbnail -->
							<?php endwhile; endif; ?>
							<?php wp_reset_query(); ?>                                              
						</div>
						<!-- end flickr -->
					</div>
					<!-- end widget content -->                        

				</div>
				<!-- end widget -->
				<!-- widget -->
				<div class="widget span4">
					<h3>Я в сети</h3>
					<!-- widget content -->
					<div class="widget-content">
						<p>Я не думаю что кому-то будут интересны ссылки на мои социальные сети и странички на фриланс-сайтах, но мой seo-психолог говорит что так нужно</p>
						<div class="clearfix"></div>
						<!-- social icons -->
						<div class="social-icons clearfix">
							<a href="#" class="facebook"></a>
							<a href="#" class="twitter"></a>
							<a href="#" class="dribbble"></a>
							<a href="#" class="vimeo"></a>
							<a href="#" class="rss"></a>
						</div>
						<!-- end social icons -->        
						<!-- newsletter -->
<!-- 						<div class="newsletter">
	<h4>Sign up for our newsletter</h4>
	<form class="newsletter-form">
		<input type="text" class="email" placeholder="enter your email address" />
		<input type="submit" class="submit" value="" >
	</form>
	end form
</div> -->
						<!-- end newsletter -->                    
					</div>
				</div>
				<!-- end widget -->
				
				<?php if ( is_active_sidebar('widget-area-1') ) : ?>
					<?php dynamic_sidebar( 'widget-area-1' ); ?>
				<?php else : ?>
				 
				<!-- widget -->
				<div class="widget span4">
					<h3>Twitter</h3>
					<div class="widget-content">
						<!-- twitter -->
						<div class="twitter-wrapper">
							<div class="tweet">
							<p><a href="#">@Mocha</a> Our background is creative, we love open source, we believe that work is about way more than just making money.</p>
							</div>
							<!-- end tweet -->
							<div class="tweet">
							<p><a href="#">@Mocha</a> We design for print, for web
							and love nothing more than creating and developing brands <a href="#">http://themeforest.net</a>.</p>
							</div>
							<!-- end tweet -->
							<div class="tweet">
							<p><a href="#">@Mocha</a> We totally committed to making products that are awesome .</p>
							</div>
							<!-- end tweet -->
						</div>
						<!-- end twitter wrapper -->
					</div>
					<!-- end widget content -->
				</div>
				<!-- end widget -->
				<?php endif; ?>
			</div>
			<!-- end widgets wrapper -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
    <!-- second container / copyrights -->
    <div class="copyrights">
		<div class="container">
			<div class="row">
				<div class="copyrights-wrapper span12">
					<!-- left copyrights -->
					<div class="left-copyrights">
						<p>Сайтобаза - качественная верстка, интеграция в WordPress, парсинг контента и недорогое наполнение сателлитов.</p>
						<span class="counter">
							<!--LiveInternet counter--><script type="text/javascript"><!--
							document.write("<a href='http://www.liveinternet.ru/click' "+
							"target=_blank><img src='//counter.yadro.ru/hit?t25.3;r"+
							escape(document.referrer)+((typeof(screen)=="undefined")?"":
							";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
							screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
							";h"+escape(document.title.substring(0,80))+";"+Math.random()+
							"' alt='' title='LiveInternet: показано число посетителей за"+
							" сегодня' "+
							"border='0' width='88' height='15'><\/a>")
							//--></script><!--/LiveInternet-->
						</span>
					</div>
					<!-- end left copyrights -->
					<!-- right menu -->
					<div class="right-menu">
						<?php html5extra_nav(); ?>
					</div>
					<!-- end right menu -->
				</div><!-- end span12 -->
			</div>
            <!-- end row -->
		</div>
        <!-- end container -->
    </div>
    <!-- end copyrights -->
</footer>
	<?php wp_footer(); ?>
	<!-- Javascript -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/mediaelement.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-6.2.1-packed.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
	<!-- Start SiteHeart code -->
	<script>
		(function(){
		// your widget ID
		var widget_id = 660611;
		_shcp =[{widget_id : widget_id}];
		// set default language
		var lang =(navigator.language || navigator.systemLanguage 
		|| navigator.userLanguage ||"en")
		.substr(0,2).toLowerCase();
		// script url
		var url ="widget.siteheart.com/widget/sh/"+ widget_id +"/"+ lang +"/widget.js";
		var hcc = document.createElement("script");
		hcc.type ="text/javascript";
		hcc.async =true;
		hcc.src =("https:"== document.location.protocol ?"https":"http")
		+"://"+ url;
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hcc, s.nextSibling);
		})();
	</script>
	<!-- End SiteHeart code -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28155960-1']);
	  _gaq.push(['_setDomainName', 'saitobaza.ru']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter11719195 = new Ya.Metrika({id:11719195,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    trackHash:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/11719195" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>