<div class="">
	<div class="span12">
		<legend class=""><h4>Events</h4></legend>
		<?php
		$myEvents = ev::events(NULL, 1);
		print_r($myEvents);
		?>
		<div class="eventLists">
			<?php foreach ($myEvents as $event): ?>
			<div class="event">
				<?php if($s['user_id'] == $event['user_id']): ?>
					<span class="pull-right">
						<a class="btn btn-mini">edit</a>
						<a class="btn btn-mini btn-danger">delete</a>
					</span>
				<?php endif; ?>
				<a><h4><?php echo $event['event'] ?></h4></a>
				<p><?php echo $event['description'] ?></p>
				<div class="muted"><small><?php echo $event['location'] ?></small></div>
				<div class="muted"><small><?php echo $event['start'] ?> to <?php echo $event['end'] ?></small></div>
			</div><hr/>
			<?php endforeach; ?>
			<div class="brick-tail" datasrc="<?php echo md5($event["event_id"]); ?>" id="<?php echo $event["event_id"]; ?>" id="<?php echo $event["event_id"]; ?>"></div>
		</div>
		<center>
		<div id="brick-loader" style="border: 1px solid #00000;"></div>
		<input type="button" class="btn" id="loader" style="width:95%;margin:5px auto;text-align:center;" onclick="brickGetMorePosts('','');" value="Load more.." />
		</center>
	</div>	
	<div class="clear"></div>
</div>