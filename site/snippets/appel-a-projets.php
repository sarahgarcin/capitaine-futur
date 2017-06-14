<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-16 medium-push-1 large-12 large-push-3 xlarge-8 xlarge-push-5" 
	data-top="opacity:0; display:none;" 
	data-bottom="opacity:0; display:none;" 
	data--6000-bottom="opacity:0; display:block;"
	data--7000-bottom="opacity:1; display:block;"
	data--8000-bottom="opacity:1; display:block;"
	data--8500-bottom="opacity:0; display:none;" >
		<div class="text-wrapper">
			<div class="entete-text">
				<?php echo $data->entete()->kirbytext() ?>
			</div>
			<div class="appel-liens">
				<a href="<?php echo $pages->find('appel-a-projets')->url()?>" title="<?php echo $pages->find('appel-a-projets')->title()?>" target="_blank">
					PDF
				</a>
				<a href="<?php echo $pages->find('formulaire')->url()?>" title="<?php echo $pages->find('formulaire')->title()?>">
					<?php echo l::get('apply')?>
				</a>
			</div>
			<div class="text-inner">
				<?php //echo $data->text()->kirbytext() ?>
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

