<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-12 large-push-3 xlarge-8 xlarge-push-5" 
	data-top="opacity:0; display:none;" 
	data--2000-bottom="opacity:0; display:block;" 
	data--2500-bottom="opacity:0;display:block;"
	data--3000-bottom="opacity:1;display:block;"
	data--4000-bottom="opacity:1;display:block;"
	data--4500-bottom="opacity:0;display:none;" 
	data-anchor-target="#slide-2">
		<!-- <h2><?php echo $data->title()->html() ?></h2> -->
		<div class="left-col small-5 columns">
			<div class="sommaire-wrapper">
				<?php echo $data->sommaire()->kirbytext() ?>
			</div>
			<div class="appel-liens">
				<a href="<?php echo $pages->find('formulaire')->url()?>" title="<?php echo $pages->find('formulaire')->title()?>">
					Candidater
				</a>
				<a href="<?php echo $pages->find('appel-a-projets')->url()?>" title="<?php echo $pages->find('appel-a-projets')->title()?>" target="_blank">
					Télécharger l’appel à projets
				</a>
			</div>
		</div>
		<div class="text-wrapper small-12 columns end">
			<?php echo $data->text()->kirbytext() ?>
		</div>
	</div>
</section>

