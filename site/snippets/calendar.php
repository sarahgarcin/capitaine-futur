<div id="calendar" class="small-16 small-push-1 medium-16 medium-push-2 large-14 large-push-2">
	<?php foreach($page->events()->toStructure() as $event):?>
		<?php 
		$startFormat = strtotime($event->datestart);
		$endFormat = strtotime($event->dateend);
			
			if($event->link()->isNotEmpty()):
				$uid = strval($event->link());
				$link = $site->index()->findBy('uid', $uid)->url();
			elseif($event->linkExt()->isNotEmpty()):
				$link = $event->linkExt();
			endif;
		?>
		<?php if(strtotime($event->datestart()) == strtotime($event->dateend())):?>	
			<div class="calendar-event" data-content="<?php echo $event->eventtitle()?>" data-link="<?php echo $link ?>" data-start="<?php echo $event->datestart()?>" data-start-format="<?php echo date('d/m', $startFormat);?>"></div>
		<?php else:?>
			<div class="calendar-event" data-content="<?php echo $event->eventtitle()?>" data-link="<?php echo $link ?>" data-start="<?php echo $event->datestart()?>" data-end="<?php echo $event->dateend()?>" data-start-format="<?php echo date('d/m', $startFormat)?>" data-end-format="<?php echo date('d/m', $endFormat)?>"></div>
		<?php endif?> 
	<?php endforeach?>

</div>
