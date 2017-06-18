<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-8 large-push-5" 
	data-top="opacity:0;display:none;" 
	data--16000-bottom="opacity:0;display:block;" 
	data--17000-bottom="opacity:1;display:block;">
	  <div class="text-inner">
	  	<div class="entete-text">
				<?php echo $data->contact()->kirbytext() ?>
			</div>
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

