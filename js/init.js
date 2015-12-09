$(function() {
	$("#menu").mmenu({
		navbar: {
			'title' : 'VW Academy'
		},
		offCanvas: {
            position  : "right",
        },
        dragOpen: {
           open: true,
           threshold: 75
        }
	});

	var sParentUrl = window.location.pathname.split('/').slice(0, -2).join('/')+'/';

	$('a[href="'+window.location.pathname+'"], a[href="'+sParentUrl+'"]').parents('li').addClass('selected');
	

	$('.equalHeights').equalHeights();
});

$(window).load(function(){
	$('.equalHeights').equalHeights();
});

function resizeFunctions(){
	$('.equalHeights').equalHeights();
}

var doit;
$(window).resize(function(){
	clearTimeout(doit);
	doit = setTimeout(resizeFunctions, 100);	
});