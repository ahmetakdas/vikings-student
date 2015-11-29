$(function() {
	$('nav').slicknav({
		label: '',
		duration: 600,
		easingOpen: "easeOutBounce"
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