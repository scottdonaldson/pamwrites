$(document).ready(function(){
	
	var content = $('#content');
	content.fitVids();

	var sidebarHeight = $('#sidebar').height();
	content.css('min-height', sidebarHeight);
	
});