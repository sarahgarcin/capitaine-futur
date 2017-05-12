<section id="<?php echo $data->uid()?>">
  <h1><?php echo $data->title()->html() ?></h1>
  <ul>
	  <?php foreach($data->children()->visible() as $date):?>
	  	<li class="date">
		  	<h2><?php echo $date->title()->html()?></h2>
		  	<h3><?php echo $date->date("d/m/Y")?></h3>
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
</section>
