
<table class="table table-striped">
	<tr>	
		<th>Song</th>
		<th>Contributor</th>
		<th>Crunches</th>
	</tr>
	
	<?php foreach($songs as $song):?>
	<tr>
		<td class="datacell" data-url = <?php echo $song->url; ?>></td>
		<td><?php echo $song->contributor;?></td>
		<td><?php echo $song->crunches; ?></td>
	</tr>
	<?php endforeach; ?>
</table>