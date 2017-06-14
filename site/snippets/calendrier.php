<?php 
	$i = 0;
	$c = 0;
	$count = 0;
	$currentTime = date('Ymd');
		foreach($data->children()->visible() as $key=>$periode):
			$c ++;
			foreach($periode->children()->visible() as $date):
				if($date->agenda()->isNotEmpty()):
					foreach($date->agenda()->toStructure() as $dates):
						$i++;
						$from = $dates->from();
						$to = $dates->to();
						$newDateFrom = date("d.m.y", strtotime($from));
						$newDateTo = date("d.m.y", strtotime($to));
						$array[$key][$i]['datestart'] = date("Ymd", strtotime($from));
		    		$array[$key][$i]['dateend'] = date("Ymd", strtotime($to));
		    		
		    		$array[$key][$i]['from'] = $newDateFrom;
		    		$array[$key][$i]['to'] = $newDateTo;
						
						$array[$key][$i]['titre'] = $date->title();
						$array[$key][$i]['text'] = $date->text();
						$array[$key][$i]['link'] = $date->link();

						$projectTime = date("Ymd", strtotime($from));
		    		$projectTimeEnd = date("Ymd", strtotime($to));
						if($currentTime > $projectTime && $currentTime > $projectTimeEnd){
							unset($array[$key][$i]);
						}
					endforeach;
				endif;
			endforeach;
			usort($array[$key], function($a, $b) {
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
			  <div class="colonne-wrapper text-wrapper"> 
				  <ul class="row">
					  	<?php foreach($array[$key] as $date):?>
					  		<li class="date small-18">
						  		<a href="<?php echo $date['link']?>" title="<?php echo $date['titre']?>">
										<ul class="dates">
										  <li>
										  	<?php if($date["from"] == $date["to"]):?>
										  		<p class="date-head"><?php echo $date["from"]?></p>
										  		<h4><?php echo $date["titre"]->html()?></h4>
								  				<?php echo $date["text"]->kirbytext()?>
										    <?php else:?>
										    	<p class="date-head"><?php echo $date["from"]?> - <?php echo $date["to"]?> </p>
					  							<h4><?php echo $date["titre"]->html()?></h4>
								  				<?php echo $date["text"]->kirbytext()?>
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
