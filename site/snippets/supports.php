<section id="<?php echo $data->uid()?>" class="textCartel">
	<!-- <div class="inner-content small-16 small-push-1 medium-8 medium-push-8 large-7 large-push-8" > -->
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-12 large-push-3 xlarge-8 xlarge-push-5" 
	data-top="opacity:0;display:none;" 
	data--18500-bottom="opacity:0;display:block;" 
	data--19000-bottom="opacity:1;display:block;"
	data--20000-bottom="opacity:1;display:block;" 
	data--20500-bottom="opacity:0; display:none;" >
	  <div class="text-inner">
	  	<?php echo $data->text()->kirbytext() ?>
	 	</div>
	 	<div class="logos">
	 		<?php if($data->logos()->isNotEmpty()):
	  		$filenames = $data->logos()->split(',');
					if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
					$files = call_user_func_array(array($data->files(), 'find'), $filenames);?>
					<ul class="row">
					<?php foreach($files as $file):?>
						<li class="small-4 columns end">
							<a href="<?php echo $file->imglink()?>" title="<?php echo $file->name()?>" target="_blank">
								<img src="<?php echo $file->url()?>" alt="<?php echo $file->name()?>">
							</a>
						</li>
					<?php endforeach;?>
					</ul>
			<?php endif ?>
  	</div>		
	</div>

</section>