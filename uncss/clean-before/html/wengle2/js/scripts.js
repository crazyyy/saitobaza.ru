// DOM Ready
$(function() {
	
	// SVG fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});
$(document).ready( function(){
	// backstretch
	$("body").backstretch("img/bg/bg-body.jpg");
	// home page animate resize
    $('.looper-inside').hover( 
    function(){
    	$(this).addClass("looper-active");
    	$(this).stop().animate({'z-index':'10', height:'310px'},'slow');
    },
    function(){
    	$(this).stop().animate({height:'224px','z-index':'5'},'slow');
    	$(this).removeClass("looper-active");
    });
});