<div id="calendar">
	<?php foreach($page->events()->toStructure() as $event):?>
		<?php if(strtotime($event->datestart()) == strtotime($event->dateend())):?>	
			<div class="calendar-event" data-content="<?php echo $event->eventtitle()?>" data-link="<?php echo $event->link()?>" data-start="<?php echo $event->datestart()?>" ></div>
		<?php else:?>
			<div class="calendar-event" data-content="<?php echo $event->eventtitle()?>" data-link="<?php echo $event->link()?>" data-start="<?php echo $event->datestart()?>" data-end="<?php echo $event->dateend()?>" ></div>
		<?php endif?> 
	<?php endforeach?>

</div>
