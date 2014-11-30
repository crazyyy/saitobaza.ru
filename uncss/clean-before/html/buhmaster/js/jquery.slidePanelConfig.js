$(document).ready(function(){
			
			// default settings
			// $('.panel').slidePanel();
			
			
			$('#pane1').slidePanel({
				triggerName: '#trigger1',
				position: 'fixed',
				triggerTopPos: '303px',
				panelTopPos: '303px'
			});
			
			$('#pane2').slidePanel({
				triggerName: '#trigger2',
				speed: 'fast',
				ajax: false,
				ajaxSource: null,
				position: 'fixed',
				triggerTopPos: '410px',
				panelTopPos: '410px'
			});
		});