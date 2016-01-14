$(document).ready(function() {

var style = $('<style/>',{});
var pre = $('<textarea/>',{});

pre.css({
		'display':'block',
		'white-space':'pre',
		'position':'fixed',
		'left':'0',
		'bottom':'0',
		'width':'100%',
		'height':'30%',
		'background-color':'white',
		'color':'black',
		'font-size':'13px',
		'overflow':'auto',
		'padding':'5px 30px',
	})
	//.attr('contentEditable',true)
	;

style.appendTo($('body'));
pre.appendTo($('body'));

$(document.body).bind('keydown.fecss', function(event){
	
	if(event.ctrlKey && event.which==90) { // Ctrl + Z
		event.stopPropagation();
		event.preventDefault();
		
		var html = pre.val();
		LS.set('style-editable', html);
		style.html(html);
		
	}
	
});

pre.val(LS.get('style-editable'));
style.html(LS.get('style-editable'));

});