
$(document).ready(function(){

	SC.initialize({
	    client_id: "472760520d39b9fa470e56cdffc71923",
	  });
	
	SC.oEmbed($('#crunch1').attr('url'), {auto_play: false}, document.getElementById('crunch1'));
	SC.oEmbed($('#crunch2').attr('url'), {auto_play: false}, document.getElementById('crunch2'));
	
	/* initiate auth popup
	SC.connect(function() {
	  SC.get('/me', function(me) {
	    alert('Hello, ' + me.username);
	  });
	});
	*/
})
