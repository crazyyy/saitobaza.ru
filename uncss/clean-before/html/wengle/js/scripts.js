$(document).ready(function() {
	
	jQuery('.container-post').each(function() {
	  jQuery(this).attr('rel', jQuery(this).height());
	});
	
	jQuery('.container-post').height(219);
	
	
	jQuery(".hover_block").hover(
      function () {
		  $(this).fadeOut(600);
	   },
	   function () {
		   $(this).fadeIn(600);
	   }
	 );
	

$('.container-post').hover(function () {
	$(this).addClass('active');
	$(this).delay(500).transition({ height: $(this).attr('rel')+'px' });
	$(this).css('z-index', '100');
}, function () {
	$(this).css('z-index', '10');
	$(this).removeClass('active');
	$(this).height(219);
	$(this).stop(true, true);
});
	
	

$('.scroll_bl_pan').jScrollPane();


$('.multiselect_bl').click(function () {
	$(this).find('.show_panel').show();
});


	$('div.login_popap').css('display','none');
	
	$('a.login-panel_login').on('click', function() {
		$('div.login_popap').fadeIn();
		$('div.reg_popap').fadeOut();
		return false;
	});	
	
	$('div.login_popap .close_popap').on('click', function() {
		$('div.login_popap').fadeOut();
		return false;
	});	
	
	
	
	
	$('div.reg_popap').css('display','none');
	
	$('a.login-panel_reg').on('click', function() {
		$('div.reg_popap').fadeIn();
		$('div.login_popap').fadeOut();
		return false;
	});	
	
	$('div.reg_popap .close_popap').on('click', function() {
		$('div.reg_popap').fadeOut();
		return false;
	});	
	
	
/*popap*/
	
	setTimeout(function () {
        //$('div.ui-multiselect-menu').css('display','none')
    }, 10);
	
	
	
	setTimeout(function () {
        //jQuery('.ui-multiselect-checkboxes').jScrollPane();
    }, 5);
	
});



/*
window.onload = function(){


var checkboxes = document.querySelectorAll('.option_check'),
    checkall = document.getElementById('ui-multiselect-checkall');
var checkboxes2 = document.querySelectorAll('.option2_check'),
    checkall2 = document.getElementById('ui-multiselect-checkall2');
	
for(var i=0; i<checkboxes.length; i++) {
    checkboxes[i].onclick = function() {
        var allChecked = document.querySelectorAll('.option_check:checked').length;
        checkall.checked = allChecked == checkboxes.length;
        checkall.indeterminate = allChecked > 0 && allChecked < checkboxes.length;
    }
}
for(var i=0; i<checkboxes2.length; i++) {
    checkboxes2[i].onclick = function() {
        var allChecked2 = document.querySelectorAll('.option2_check:checked').length;
        checkall2.checked = allChecked2 == checkboxes2.length;
        checkall2.indeterminate = allChecked2 > 0 && allChecked2 < checkboxes2.length;
    }
}

checkall.onclick = function() {
    for(var i=0; i<checkboxes.length; i++) {
        checkboxes[i].checked = checkall.checked;
    }
}
checkall2.onclick = function() {
    for(var i=0; i<checkboxes.length; i++) {
        checkboxes2[i].checked = checkall2.checked;
    }
}
};
*/
/* 
********
*/
$(document).ready(function() {
	/*$('.show_panel').jScrollPane();*/
  $(':password').showPassword({
    linkRightOffset: 5,
    linkTopOffset: 11
  });

});
/* *** */
$(function(){
	$("#select_1").multiselect({
		show: ["fade", 300],
		hide: ["fade", 300],
		noneSelectedText: 'Пусто',
		selectedText: '# мероприятия выделено'
	});
	
	$("#select_2").multiselect({
		show: ["fade", 300],
		hide: ["fade", 300],
		noneSelectedText: 'Пусто',
		selectedText: '# города выделено',
	});
	$("#select_2").multiselect("checkAll");
	
});
$(function() {
	$( "#from" ).datepicker({
		defaultDate: "null",
		showButtonPanel: true,
		dateFormat: "dd M yy",
		onClose: function( selectedDate ) {
			$( "#to" ).datepicker( "option", "minDate", selectedDate );
		}
		
	});
	$( "#from" ).datepicker( "setDate", "getDate" );
	
	$( "#to" ).datepicker({
		defaultDate: "+2w",
		dateFormat: "dd M yy",
		showButtonPanel: true,
		onClose: function( selectedDate ) {
			$( "#from" ).datepicker( "option", "maxDate", selectedDate );
		}
	});
	$( "#to" ).datepicker( "setDate", "getDate +2w" );

	$('.onckeck').click(function () {
		$('.wrapper1').toggle();
	});
	
});