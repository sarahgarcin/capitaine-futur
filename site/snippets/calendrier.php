<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-12 medium-push-3" 
	data-top="top: 100%;" 
	data--3000-bottom="top: 100%;"
	data--3800-bottom="top: 50%;" 
	data--5000-bottom="top: 15%;" 
	data--6000-bottom="top: 15%;"
	data--6500-bottom="top: 100%;"  
	data-anchor-target="#slide-6">
	  <h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper small-16 small-push-1"> 
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
