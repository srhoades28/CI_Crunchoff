<?php ?>
<div class="container">
	<div class="col-md-5"></div>

	<div class="col-md-2">
	<ul id="footer">
		<li><a href="https://www.facebook.com/CrunchOff"><img src=<?php echo base_url("assets/images/fb.png");?>></a></li>
		<li><a href="https://twitter.com/CrunchOff"><img src=<?php echo base_url("assets/images/twitter.png");?>></a></li>
		<li><a href="https://soundcloud.com/crunchoff"><img src=<?php echo base_url("assets/images/SC.png");?>></a></li>
	</ul>
	</div>

	<div class="col-md-5"></div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="datadiv" data-crunch_number= <?php //print_r($facade);?>></div>

</body>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?php echo base_url("assets/js/bootstrap.js")?>></script>
    <script src=<?php echo base_url("assets/js/jquery.js")?>></script>
 	<script src="//connect.soundcloud.com/sdk-2.0.0.js"></script> 
    <script src=<?php echo base_url("assets/js/soundcloud.js"); ?>></script>
    <script src=<?php echo base_url("assets/js/formatting.js"); ?>></script>

  
 
</html>