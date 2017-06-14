<?php 
	$i = 0;
	$currentTime = date('Ymd');


	foreach($data->children()->visible() as $date):
		if($date->agenda()->isNotEmpty()):
			foreach($date->agenda()->toStructure() as $dates):
				$i++;
				$from = $dates->from();
				$to = $dates->to();
				$newDateFrom = date("d.m.y", strtotime($from));
				$newDateTo = date("d.m.y", strtotime($to));
				$array[$i]['datestart'] = date("Ymd", strtotime($from));
    		$array[$i]['dateend'] = date("Ymd", strtotime($to));
    		
    		$array[$i]['from'] = $newDateFrom;
    		$array[$i]['to'] = $newDateTo;
				
				$array[$i]['titre'] = $date->title();
				$array[$i]['text'] = $date->text();
				$array[$i]['link'] = $date->link();

				$projectTime = date("Ymd", strtotime($from));
    		$projectTimeEnd = date("Ymd", strtotime($to));
				if($currentTime > $projectTime && $currentTime > $projectTimeEnd){
					unset($array[$i]);
				}
			endforeach;
		endif;
	endforeach;

	usort($array, function($a, $b) {
	  return $a['datestart'] - $b['datestart'];
	});


?>


<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-14 medium-push-2 large-12 large-push-3" > -->
	<div class="inner-content small-16 small-push-1 medium-14 medium-push-2 large-12 large-push-3" 
	data-top="opacity:0;display:none;" 
	data-bottom="opacity:0;display:none;"
	data--13000-bottom="opacity:0;display:block;" 
	data--14000-bottom="opacity:1;display:block;" 
	data--16000-bottom="opacity:1;display:block;"
	data--17000-bottom="opacity:0;display:none;"  
	data-anchor-target="#slide-6">
	  <!-- <h2><?php echo $data->subtitle()->html() ?></h2> -->
	  <div class="text-wrapper"> 
		  <ul class="row">
			  	<?php foreach($array as $date):?>
				  	<li class="date small-16 medium-9 large-6 columns end">
				  		<a href="<?php echo $date['link']?>" title="<?php echo $date['titre']?>">
								<ul class="dates">
								  <li>
								  	<?php if($date["from"] == $date["to"]):?>
								  		<h4><?php echo $date["from"]?></h4>
								  		<p><strong><?php echo $date["titre"]->html()?></strong></p>
						  				<?php echo $date["text"]->kirbytext()?>
								    <?php else:?>
								    	<h4><?php echo $date["from"]?> - <?php echo $date["to"]?> </h4>
			  							<p><strong><?php echo $date["titre"]->html()?></strong></p>
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
</section>
