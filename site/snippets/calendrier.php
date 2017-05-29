<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-12 medium-push-3" 
	data-top="top: 100%;" 
	data--3000-bottom="top: 100%;"
	data--3800-bottom="top: 50%;" 
	data--5000-bottom="top: 12%;" 
	data--6000-bottom="top: 12%;"
	data--6500-bottom="top: 100%;"  
	data-anchor-target="#slide-6">
	  <h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper small-16 small-push-1"> 
		  <ul class="row">
			  <?php foreach($data->children()->visible() as $date):?>
			  	<li class="date small-9 medium-6 columns end">
			  		<a href="<?php echo $date->link()?>" title="<?php echo $date->title()?>">
					  	<h3><?php //echo $date->title()->html()?></h3>
					  	<h4><?php echo $date->date("d.m.Y")?></h4>
					  	<?php echo $date->text()->kirbytext()?>
				  	</a>
				  	<?php //if($date->hasImages()):
				  // 		foreach($date->images() as $image):
					 //      echo kirbytag(array(
					 //  		  'image'  				=> $date->image()->filename(),
					 //  		  'thumbwidth' 		=> 500,
					 //  		  'outputlink'     => false,
					 //  		  'optimumx'=> 2,
					 //  		  'return_srcset' => false,
					 //  		  'multisizes' => true,
					 //  		  'originalPage'  => $date,
					 //  		  'alt'=> $date->title(),
					 //  		  'itemprop' => "image",
					 //  		  'class' => "small-4"
					 //  		));
					 //  	endforeach;
						// endif; ?>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</section>
