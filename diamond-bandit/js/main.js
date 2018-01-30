$(document).ready(function(){
	if ($.loadedFromBrowserCache) {
        refreshBasket();
		$(this).scrollTop(0);
    }else{
		$('#landing').addClass('stop-scroll');
		$(this).scrollTop(0);
	}
	
	$("#top-anchor").click(function(e) {
		$('html, body').animate({
			scrollTop: $("#tell-me-more").offset().top
		}, 2000);
		$('#landing').removeClass('stop-scroll');
		e.preventDefault();
		e.stopPropagation();
	});

});