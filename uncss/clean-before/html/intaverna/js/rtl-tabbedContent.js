//tab effects

var TabbedContent = {
	init: function() {	
		$(".tab-item").mouseover(function() {
		
			var background = $(this).parent().find(".moving-bg");
			
			$(background).stop().animate({
				left: $(this).position()['left']
			}, {
				duration: 300
			});
			
			TabbedContent.slideContent($(this));
			
		});
	},
	
	slideContent: function(obj) {
		
		var margin = $(obj).parent().parent().find(".slide-content").width();
		margin = margin * ($(obj).prevAll().size() - 1);
		margin = margin * -1;
		
		$(obj).parent().parent().find(".tabslider").stop().animate({
			marginRight: margin + "px"
		}, {
			duration: 300
		});
	}
}

$(document).ready(function() {
	TabbedContent.init();
});