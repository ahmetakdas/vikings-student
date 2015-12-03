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