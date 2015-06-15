
	<div class="container crunchoff">
	
		<div class="col-md-5">
			<p>Contributor: <?php echo $result[0]->Contributor; ?></p>
			<div id="crunch1" url=<?php echo $result[0]->url; ?> class="crunch"></div>
			<form id =<?php echo $result[0]->id; ?> method="post">
				<input type='hidden' name='id' value =<?php echo $result[0]->id; ?>>
				<br>
				<input type='submit' value='Upvote'>
				<p></p>
			</form>
		</div>
		
		<div class="col-md-2">
			<img id="vs" src=<?php echo base_url("assets/images/vs.png")?>>
		</div>
		
		<div class="col-md-5">
			<p>Contributor: <?php echo $result[0]->Contributor; ?></p>
			<div id="crunch2" url=<?php echo $result[1]->url; ?> class="crunch"></div>
			<form id =<?php echo $result[1]->id; ?> method="post">
				<input type='hidden' name='id' value =<?php echo $result[1]->id; ?>>
				<br>
				<input type='submit' value='Upvote'>
				<p></p>
			</form>
		</div>
	</div>
	
	<div id="putWidgetHere"></div>

