$("document").ready(function(){
	// iterate over the forms

		$("#Form0").submit(function(event){
			//Prevent Default Submission
			event.preventDefault();
			
			//Fade Out button and other crunch button as well. 
			$("#Form0 input[type=submit]").fadeOut();
			$("#Form1 input[type=submit]").fadeOut();
			
			//Get value of the forms hidden input box ---> the song id. 
			  var id = $( "#updateForm0 input[type=hidden]").val();
		
			
			//Execute the shorthand ajax post method.
			
			$.post("updateCrunches.php", {id: id}, function(data){
				
				//Callback updates the paragraph showing crunches. 
				$("#updateForm0 p").html("Crunches: "+data);
				
			});
		
		});	
		$("#Form1").submit(function(event){
			//Prevent Default Submission
			event.preventDefault();
			
			//Get value of the forms hidden input box ---> the song id. 
			  var id = $( "#updateForm1 input[type=hidden]").val();
		
			//Fade Out buttons
			$("#Form0 input[type=submit]").fadeOut();
			$("#Form1 input[type=submit]").fadeOut();
			
			//Execute the shorthand ajax post method.
			
			$.post("updateCrunches.php", {id: id}, function(data){
				
				//Callback updates the paragraph showing crunches. 
				$("#updateForm1 p").html("Crunches: "+data);
				
			});
		
		});	
		
		
});
	
