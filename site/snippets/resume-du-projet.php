<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-8 medium-push-1 xlarge-6" > -->
<!-- 	<div class="inner-content small-16 small-push-1 medium-8 medium-push-1 xlarge-6" 
	data-500-top="opacity:0;" 
	data-400-top="opacity:1;" 
	data-top="opacity:1;" 
	data--200-bottom="opacity:1;"
	data--500-bottom="opacity:0;"> -->
<!-- 		<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 xlarge-6" 
	data-top="opacity:0; display:none;" 
	data--2000-bottom="opacity:0; display:block;" 
	data--2500-bottom="opacity:0;display:block;"
	data--3000-bottom="opacity:1;display:block;"
	data--4000-bottom="opacity:1;display:block;"
	data--4500-bottom="opacity:0;display:none;" 
	data-anchor-target="#slide-2"> -->
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 xlarge-6" 
	data-top="opacity:0; display:none;" 
	data--2000-bottom="opacity:0; display:block;" 
	data--2500-bottom="opacity:0;display:block;"
	data--3000-bottom="opacity:1;display:block;"
	data--4000-bottom="opacity:1;display:block;"
	data--4500-bottom="opacity:0;display:none;">
		<div class="text-inner">
			<?php echo $data->text()->kirbytext() ?>	
		</div>
	</div>

</section>

<!-- <section id="<?php echo $data->uid()?>-slider" class="sliderCartel">
	<div class="inner-content small-16 small-push-1 hide-for-small-only medium-7 medium-push-10 xlarge-8 xlarge-push-9" 
	data-top="opacity:0; display:none;" 
	data-bottom="opacity:0; display:block;" 
	data--1000-bottom="opacity:1; display:block;"
	data--3000-bottom="opacity:1; display:block;"
	data--3500-bottom="opacity:0; display:block;" 
	data-anchor-target="#slide-6"> -->
<!-- 	<div class="inner-content small-16 small-push-1 hide-for-small-only medium-7 medium-push-10 xlarge-8 xlarge-push-9" 
	data-500-top="opacity:0;" 
	data-400-top="opacity:1;" 
	data-top="opacity:1;" 
	data--200-bottom="opacity:1;"
	data--500-bottom="opacity:0;"> -->
		<!-- <div class="inner-content small-16 small-push-1 hide-for-small-only medium-7 medium-push-10 xlarge-8 xlarge-push-9" > -->
<!-- 		<ul class="slider js_slides">
		<?php foreach($data->images() as $slide):?>
			<li class="slider-image">
				<?php echo 	$slide->crop(1200, 800); ?>
				<?php if($slide -> caption()-> isNotEmpty()):?>
					<div class="caption-wrapper">
						<?php echo $slide->caption()->kirbytext(); ?>
					</div>
					
				<?php endif ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div> -->
	
<!-- </section> -->