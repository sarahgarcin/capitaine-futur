<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-8" 
	data-top="top: 15%; left:100%;" 
	data-bottom="top: 15%; left:75%;" 
	data--1000-bottom="top: 15%; left:50%;"
	data--2000-bottom="top: 15%; left:50%;"
	data--2500-bottom="top: 15%; left:100%;" 
	data-anchor-target="#slide-4">
		<h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper small-16 small-push-2">
	  	<?php echo $data->text()->kirbytext() ?>	
	  </div>
	</div>

</section>

<section id="<?php echo $data->uid()?>-slider" class="sliderCartel">
	<div class="inner-content small-18 small-push-1 medium-7" 
	data-top="top: 15%; left:-100%;" 
	data-bottom="top: 15%; left:-40%;" 
	data--1000-bottom="top: 15%; left:5%;"
	data--2000-bottom="top: 15%; left:5%;"
	data--2500-bottom="top: 15%; left:-100%;" 
	data-anchor-target="#slide-4">
		<ul class="slider js_slides">
		<?php foreach($data->images() as $slide):?>
			<li class="slider-image">
				<?php echo 	$slide->crop(1200, 800); ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	
</section>