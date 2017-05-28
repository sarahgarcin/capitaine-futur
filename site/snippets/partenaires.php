<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-8" 
	data-top="top: 100%; left:5%;" 
	data--2000-bottom="top: 12%; left:5%;" 
	data--2500-bottom="top: 12%; left:5%;"
	data--3000-bottom="top: -100%; left:5%;"   
	data-anchor-target="#slide-5">
	  <h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper small-16 small-push-2">
	  	<ul>
	  		<?php foreach($data->children()->visible() as $part):?>
	  			<li>
	  				<h3><?php echo $part->title()->html()?></h3>
	  				<h4>+ d'infos</h4>
	  				<div class="more-text">
	  					<?php echo $part->text()->kirbytext()?>
	  				</div>
	  			</li>
	  		<?php endforeach ?>
	  	</ul>
	  </div>
  </div>
</section>
