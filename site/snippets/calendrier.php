<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-12 medium-push-3" 
	data-top="opacity:0;display:none;" 
	data-bottom="opacity:0;display:none;"
	data--13000-bottom="opacity:0;display:block;" 
	data--14000-bottom="opacity:1;display:block;" 
	data--16000-bottom="opacity:1;display:block;"
	data--17000-bottom="opacity:0;display:none;"  
	data-anchor-target="#slide-6">
	  <h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper"> 
		  <ul class="row">
			  <?php foreach($data->children()->visible() as $date):?>
			  	<?php if($date->agenda()->isNotEmpty()): ?>
				  	<li class="date small-9 medium-6 columns end">
				  		<a href="<?php echo $date->link()?>" title="<?php echo $date->title()?>">
								<ul class="dates">
								  <?php foreach($date->agenda()->toStructure() as $dates): ?>
								  <li>
								  	<?php $from = $dates->from();
								  				$to = $dates->to();
								  				$newDateFrom = date("d.m.Y", strtotime($from));
								  				$newDateTo = date("d.m.Y", strtotime($to));
								  	?>
								  	<?php if($newDateFrom == $newDateTo):?>
								  		<h4><?php echo $newDateFrom?></h4>
						  				<?php echo $date->text()->kirbytext()?>
								    <?php else:?>
								    	<h4><?php echo $newDateFrom?><br><?php echo $newDateTo?> </h4>
						  				<?php echo $date->text()->kirbytext()?>
								    <?php endif; ?>
								  </li>
								  <?php endforeach ?>
								</ul>
					  	</a>
						</li>
					<?php endif; ?>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</section>
