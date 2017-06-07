<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-8 medium-push-1 xlarge-6" 
	data-top="opacity:0; display:none;" 
	data-bottom="opacity:0; display:block;" 
	data--1000-bottom="opacity:1; display:block;"
	data--3000-bottom="opacity:1; display:block;"
	data--3500-bottom="opacity:0; display:block;" 
	data-anchor-target="#slide-6">
	 	<?php echo $data->text()->kirbytext() ?>	
	</div>

</section>

<section id="<?php echo $data->uid()?>-slider" class="sliderCartel">
	<div class="inner-content small-18 small-push-1 medium-7 medium-push-10 xlarge-8 xlarge-push-9" 
	data-top="opacity:0; display:none;" 
	data-bottom="opacity:0; display:block;" 
	data--1000-bottom="opacity:1; display:block;"
	data--3000-bottom="opacity:1; display:block;"
	data--3500-bottom="opacity:0; display:block;" 
	data-anchor-target="#slide-6">
		<ul class="slider js_slides">
		<?php foreach($data->images() as $slide):?>
			<li class="slider-image">
				<?php echo 	$slide->crop(1200, 800); ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
	
</section>