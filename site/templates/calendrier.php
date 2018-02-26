<?php snippet('header') ?>

<main class="wrap small-push-1 medium-push-0">
	<div class="breadcrumb-wrapper medium-push-4 xlarge-push-5">
		<?php snippet('breadcrumb') ?>
	</div>
	
	<div class="page-title small-16 medium-14 medium-push-4 xlarge-push-5">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<div class="calendar small-16 medium-14 medium-push-2 xlarge-16 xlarge-push-1">
		<?php $calendar = $page->calendrier()->toFile();?>
		<img src="<?php echo $calendar->url()?>" alt="Calendrier">
	</div>
	<div class="list-dates small-16 medium-10 medium-push-4 xlarge-8 xlarge-push-5">
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
			<ul>
				<li>
					<?php echo date('d/m/y', $startFormat);?> -
					<?php echo date('d/m/y', $endFormat);?><br>
					<a href="<?php echo $link?>" title="<?php echo $event->eventtitle()?>">
						<b><?php echo $event->eventtitle()?></b>
					</a>
						
				</li>
			</ul>
			
		<?php endforeach?>
	</div>
</main>

<?php snippet('footer') ?>
