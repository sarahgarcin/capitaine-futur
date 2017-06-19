<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-12 large-push-3 xlarge-8 xlarge-push-5" 
	data-top="opacity:0; display:none;" 
	data-bottom="opacity:0; display:none;" 
	data--10000-bottom="opacity:0; display:block;"
	data--10500-bottom="opacity:1; display:block;"
	data--11000-bottom="opacity:1; display:block;"
	data--11500-bottom="opacity:0; display:none;" >
		<div class="text-wrapper">
			<div class="entete-text">
				<?php echo $data->entete()->kirbytext() ?>
			</div>
			<div class="appel-liens">
				<?php if($data->pdf()->isNotEmpty()):?>
					<?php $file = $data->pdf()->toFile();?>
					<a href="<?php echo $file->url()?>" title="<?php echo $file->name()?>" target="_blank">
						PDF
					</a>
				<?php endif;?>
				<a href="<?php echo $pages->find('form')->url()?>" title="<?php echo $pages->find('form')->title()?>" target="_blank">
					<?php echo l::get('apply')?>
				</a>
			</div>
			<div class="text-inner">
				<?php $array = str::split($data->text()->kirbytext(), "===");
				foreach($array as $section):?>
					<div class="appel-section">
						<?php echo $section ?>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>

