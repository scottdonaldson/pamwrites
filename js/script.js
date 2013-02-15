$(document).ready(function(){  
	var bk = $('#bkgrnd'),
		bk2 = $('#bkgrnd2'),
		main = $('#main');
	var top = bk.offset().top - parseFloat(bk.css('marginTop').replace(/auto/, 0));
	$(window).scroll(function (event) {
		var y = $(this).scrollTop();
		if (y >= top) {
			bk.addClass('fixed');
			bk2.addClass('fixed');
		} else {
			bk.removeClass('fixed');
			bk2.removeClass('fixed');
		}
	});
	
	var content = $('#content');
	content.fitVids();

	var sidebarHeight = $('#sidebar').height();
	content.css('min-height', sidebarHeight);
	
});