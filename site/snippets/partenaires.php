<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-7 medium-push-10 xlarge-5 xlarge-push-12" > -->
	  <div class="inner-content small-16 small-push-1 medium-7 medium-push-10 xlarge-5 xlarge-push-12" 
		data-top="opacity:0;display:none;" 
		data-bottom="opacity:0;display:none;" 
		data--7000-bottom="opacity:0;display:block;" 
		data--8000-bottom="opacity:1;display:block;"
		data--9000-bottom="opacity:1;display:block;"
		data--10000-bottom="opacity:0;display:none;"   
		data-anchor-target="#slide-6">
	  <div class="text-wrapper">
	  	<ul>
	  		<?php foreach($data->children()->visible() as $part):?>
	  			<li class="partenaire-el">
	  				<h3 class="see-more"><?php echo $part->title()->html()?></h3>
	  				<div class="more-text">
	  					<div class="text-inner">
	  						<?php echo $part->text()->kirbytext()?>
	  					</div>
	  				</div>

	  				<section id="<?php echo $data->uid()?>-slider" class="sliderCartel hide-for-small-only">
							<div class="inner-content small-16 small-push-1 medium-6">
								<ul class="slider js_slides">
									<?php foreach($part->images() as $slide):?>
										<li class="slider-image">
											<?php echo 	$slide->crop(1200, 800); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							
						</section>
	  			</li>
	  		<?php endforeach ?>
	  	</ul>
	  </div>
  </div>
</section>
