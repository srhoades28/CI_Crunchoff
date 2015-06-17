
	<div class="container crunchoff">
	
		<div class="col-md-5">
			<p>Contributor: <?php echo $result[0]->Contributor; ?></p>
			<div id="crunch1" url=<?php echo $result[0]->url; ?> class="crunch"></div>
			<div></div>
			<?php $hidden = array('id' => $result[0]->id);
				  echo form_open("Navigate/next", array("id"=>"Form0"), $hidden);
				  echo form_submit("mySubmit", "Upvote!"); 
				  echo form_close("<p></p>");?>
		</div>
		
		<div class="col-md-2">
			<img id="vs" src=<?php echo base_url("assets/images/vs.png")?>>
		</div>
		
		<div class="col-md-5">
			<p>Contributor: <?php echo $result[0]->Contributor; ?></p>
			<div id="crunch2" url=<?php echo $result[1]->url; ?> class="crunch"></div>
			<div></div>
			<?php $hidden = array('id' => $result[1]->id);
				  echo form_open("Navigate/next", array("id"=>"Form1"), $hidden);
				  echo form_submit("mySubmit2", "Upvote!"); 
				  echo form_close("<p></p>");?>
		</div>
	</div>
	
	<div id="putWidgetHere"></div>

