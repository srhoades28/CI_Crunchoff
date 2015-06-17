$(document).ready(function(){
	
	//Getting a correct aspect ratio for the crunchoff iframes
	/*$('iframe').each(function(){
	*	$(this).height($(this).width()*3/5);
	})*/
	
	//Displaying the vs in the right place. 	
	$('#vs').css("top", 150);
	
	//Sizing the social media icons
	var fWidth = $('#footer').width()-30;
	
	$('ul#footer li img').each(function(){
		$(this).width(fWidth/3);
	})
})