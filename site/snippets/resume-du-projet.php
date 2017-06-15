<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 xlarge-6" 
	data-top="opacity:0; display:none;" 
	data--5000-bottom="opacity:0; display:block;" 
	data--5500-bottom="opacity:1;display:block;"
	data--6000-bottom="opacity:1;display:block;"
	data--6500-bottom="opacity:0;display:none;">
		<div class="text-inner">
			<h3><?php echo $data->subtitle()->html() ?>	</h3>
			<?php echo $data->text()->kirbytext() ?>	
		</div>
	</div>

</section>