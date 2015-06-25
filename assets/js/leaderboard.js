
$(document).ready(function(){

	SC.initialize({
	    client_id: "472760520d39b9fa470e56cdffc71923",
	  });
	
	$('.leaderboard tr').each(function(){
		var datacell = $(this).find('.datacell').data('url');
		var data = datacell.data('url');
		
		SC.oEmbed(data, {auto_play: false}, datacell);
	})
	
	/*
	SC.oEmbed($('#crunch1').attr('url'), {auto_play: false}, document.getElementById('crunch1'));
	SC.oEmbed($('#crunch2').attr('url'), {auto_play: false}, document.getElementById('crunch2'));
	*/
})