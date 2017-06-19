
<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-14 large-push-2" 
	data-top="opacity:0;display:none;" 
	data-bottom="opacity:0;display:none;"
	data--22500-bottom="opacity:0;display:block;" 
	data--23000-bottom="opacity:1;display:block;" 
	data--25700-bottom="opacity:1;display:block;"
	data--26500-bottom="opacity:0;display:none;" >
		<?php if($data->calendrier()->isNotEmpty()):?>
			<img src="<?php echo $data->calendrier()->toFile()->url()?>" alt="<?php echo $data->calendrier()->title()?>">
		<?php endif;?>	
	</div>
</section>
