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
           threshold: 55
        }
	});

	$('a[href="'+window.location.pathname+'"]').parents('li').addClass('selected');

	if(window.location.pathname.split('/').length > 7){
		var sParentUrl = window.location.pathname.split('/').slice(0, -2).join('/')+'/';
		$('a[href="'+ sParentUrl +'"]').parents('li').addClass('selected');
	}	

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