<?php 
	$i = 0;
	$c = 0;
	$count = 0;
	$currentTime = date('Ymd');
		foreach($data->children()->visible() as $periode):
			$c ++;
			foreach($periode->children()->visible() as $date):
				if($date->agenda()->isNotEmpty()):
					foreach($date->agenda()->toStructure() as $dates):
						$i++;
						$from = $dates->from();
						$to = $dates->to();
						$newDateFrom = date("d.m.y", strtotime($from));
						$newDateTo = date("d.m.y", strtotime($to));
						$array[$c][$i]['datestart'] = date("Ymd", strtotime($from));
		    		$array[$c][$i]['dateend'] = date("Ymd", strtotime($to));
		    		
		    		$array[$c][$i]['from'] = $newDateFrom;
		    		$array[$c][$i]['to'] = $newDateTo;
						
						$array[$c][$i]['titre'] = $date->title();
						$array[$c][$i]['text'] = $date->text();
						$array[$c][$i]['link'] = $date->link();

						$projectTime = date("Ymd", strtotime($from));
		    		$projectTimeEnd = date("Ymd", strtotime($to));
						if($currentTime > $projectTime && $currentTime > $projectTimeEnd){
							unset($array[$i]);
						}
					endforeach;
				endif;
			endforeach;
			usort($array[$c], function($a, $b) {
			  return $a['datestart'] - $b['datestart'];
			});
		endforeach;




?>


<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-14 medium-push-2 large-12 large-push-3" > -->
	<div class="inner-content small-16 small-push-1 medium-14 medium-push-2 large-12 large-push-3" 
	data-top="opacity:0;display:none;" 
	data-bottom="opacity:0;display:none;"
	data--13000-bottom="opacity:0;display:block;" 
	data--14000-bottom="opacity:1;display:block;" 
	data--16000-bottom="opacity:1;display:block;"
	data--17000-bottom="opacity:0;display:none;" >
	  <!-- <h2><?php echo $data->subtitle()->html() ?></h2> -->
	  <?php foreach($data->children()->visible() as $key => $periode):?>
	  	<div class="small-6 columns">
	  		<h2><?php echo $periode->title()->html()?></h2>
			  <div class="text-wrapper"> 
				  <ul class="row">
					  	<?php foreach($array as $date):?>
					  		<?php //print $date[0]['titre'] ?>
					  		<li class="date small-18">
						  		<a href="<?php echo $date[$count]['link']?>" title="<?php echo $date[$count]['titre']?>">
										<ul class="dates">
										  <li>
										  	<?php if($date[$count]["from"] == $date[$count]["to"]):?>
										  		<h4><?php echo $date[$count]["from"]?></h4>
										  		<p><strong><?php echo $date[$count]["titre"]->html()?></strong></p>
								  				<?php echo $date[$count]["text"]->kirbytext()?>
										    <?php else:?>
										    	<h4><?php echo $date[$count]["from"]?> - <?php echo $date[$count]["to"]?> </h4>
					  							<p><strong><?php echo $date[$count]["titre"]->html()?></strong></p>
								  				<?php echo $date[$count]["text"]->kirbytext()?>
										    <?php endif; ?>
										  </li>
										</ul>
							  	</a>
								</li>
				
						<?php endforeach ?>
					</ul>
				</div>
			</div>
			<?php $count ++ ?>
		<?php endforeach ?>
	</div>
</section>
