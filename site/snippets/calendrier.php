<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-10 medium-push-5" 
	data-top="top: 100%; left:5%;" 
	data--10000-bottom="top: 12%;"   
	data-anchor-target="#slide-5">
	  <h2><?php echo $data->title()->html() ?></h2>
	  <ul class="text-wrapper small-16 small-push-2">
		  <?php foreach($data->children()->visible() as $date):?>
		  	<li class="date">
			  	<h3><?php echo $date->title()->html()?></h3>
			  	<h4><?php echo $date->date("d/m/Y")?></h4>
			  	<?php echo $date->text()->kirbytext()?>
			  	<?php if($date->hasImages()):
			  		foreach($date->images() as $image):
				      echo kirbytag(array(
				  		  'image'  				=> $date->image()->filename(),
				  		  'thumbwidth' 		=> 500,
				  		  'outputlink'     => false,
				  		  'optimumx'=> 2,
				  		  'return_srcset' => false,
				  		  'multisizes' => true,
				  		  'originalPage'  => $date,
				  		  'alt'=> $date->title(),
				  		  'itemprop' => "image",
				  		  'class' => "small-4"
				  		));
				  	endforeach;
					endif; ?>
				</li>
			<?php endforeach ?>
		</ul>
	</div>
</section>
