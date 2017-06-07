<section id="<?php echo $data->uid()?>" class="textCartel">
<!-- 	<div class="inner-content small-18 small-push-1 medium-8" 
	data-top="top: 100%; left:5%;" 
	data-bottom="top: 100%; left:5%;" 
	data--2500-bottom="top: 15%; left:5%;" 
	data--3500-bottom="top: 15%; left:5%;"
	data--3800-bottom="top: -100%; left:5%;"   
	data-anchor-target="#slide-3"> -->
	<div class="inner-content small-18 small-push-1 medium-8" 
	data-top="top: 15%; left:5%; opacity:0;" 
	data-bottom="top: 15%; left:5%; opacity:0;" 
	data--2500-bottom="top: 15%; left:5%; opacity:1;" 
	data--3500-bottom="top: 15%; left:5%; opacity:1;"
	data--3800-bottom="top: 15%; left:5%; opacity:0;"   
	data-anchor-target="#slide-3">
	  <h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper">
	  	<ul>
	  		<?php foreach($data->children()->visible() as $part):?>
	  			<li class="partenaire-el">
	  				<h3><?php echo $part->title()->html()?></h3>
	  				<h4 class="see-more">+ d'infos</h4>
	  				<div class="more-text">
	  					<?php echo $part->text()->kirbytext()?>
	  				</div>

	  				<section id="<?php echo $data->uid()?>-slider" class="sliderCartel">
							<div class="inner-content small-18 small-push-1 medium-6"
							data-top="top: 100%;" 
							data-bottom="top: 100%;" 
							data--2500-bottom="top: 15%;" 
							data--3500-bottom="top: 15%;"
							data--3800-bottom="top: -100%;"   
							data-anchor-target="#slide-3">
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
