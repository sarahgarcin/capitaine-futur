<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-7 medium-push-10 xlarge-5 xlarge-push-12" > -->
	  <div class="inner-content small-16 small-push-1 medium-12 medium-push-4 large-8 large-push-8 xlarge-6 xlarge-push-8" 
		data-top="opacity:0;display:none;" 
		data-bottom="opacity:0;display:none;" 
		data--15500-bottom="opacity:0;display:block;" 
		data--16000-bottom="opacity:1;display:block;"
		data--16500-bottom="opacity:1;display:block;"
		data--17000-bottom="opacity:0;display:none;">
	  <div class="text-wrapper">
	  	<ul>
	  		<?php foreach($data->children()->visible() as $part):?>
	  			<li class="partenaire-el">
	  				<div class="see-more">
		  				<h3><?php echo $part->title()->html()?></h3>
		  				<h4><?php echo $part->subtitle()->html()?></h4>
		  				<h5><?php echo $part->place()->html()?></h5>
	  				</div>
	  				<div class="more-text">
	  					<div class="text-inner">
	  						<?php echo $part->text()->kirbytext()?>
	  					</div>
	  				</div>

<!-- 	  				<section id="<?php echo $data->uid()?>-slider" class="sliderCartel hide-for-small-only">
							<div class="inner-content small-16 small-push-1 medium-6">
								<ul class="slider js_slides">
									<?php foreach($part->images() as $slide):?>
										<li class="slider-image">
											<?php echo 	$slide->crop(1200, 800); ?>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							
						</section> -->
	  			</li>
	  		<?php endforeach ?>
	  	</ul>
	  </div>
  </div>
</section>
