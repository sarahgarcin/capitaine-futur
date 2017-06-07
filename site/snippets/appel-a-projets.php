<section id="<?php echo $data->uid()?>" class="textCartel">
<!-- 	<div class="inner-content small-16 small-push-1 medium-10 medium-push-1" 
	data-top="top: 15%; left:-100%;" 
	data--6500-bottom="top: 15%; left:-50%;" 
	data--7000-bottom="top: 15%; left:20%;" 
	data-anchor-target="#slide-6"> -->
	<div class="inner-content small-16 small-push-1 medium-10 medium-push-1" 
	data-top="top: 15%; left:10%; opacity:0;" 
	data--6500-bottom="top: 15%; left:20%; opacity:0;" 
	data--7000-bottom="top: 15%; left:20%; opacity:1;" 
	data-anchor-target="#slide-2">
		<!-- <h2><?php echo $data->title()->html() ?></h2> -->
		<div class="sommaire-wrapper small-5 columns">
			<?php echo $data->sommaire()->kirbytext() ?>
		</div>
		<div class="text-wrapper small-12 columns end">
			<?php echo $data->text()->kirbytext() ?>
		</div>
	</div>
</section>

<section id="<?php echo $data->uid()?>-appel" class="formes">
<!-- 	<div class="inner-content" 
	data-top="top: -50%; left:80%;" 
	data--6500-bottom="top: -20%; left:80%;" 
	data--7000-bottom="top: 20%; left:80%;" 
	data-anchor-target="#slide-6"> -->
	<div class="inner-content" 
	data-top="top: 20%; left:80%; opacity:0;" 
	data--6500-bottom="top: 20%; left:80%; opacity:0;" 
	data--7000-bottom="top: 20%; left:80%; opacity:1;" 
	data-anchor-target="#slide-6">
		<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="155px" height="148.394px" viewBox="0 0 155 148.394" enable-background="new 0 0 155 148.394" xml:space="preserve">
		<polygon fill="#007C15" points="26.935,0 0,69.114 0,112.819 27.952,137.213 39.132,141.278 94.016,148.394 141.787,119.934 
			155,81.31 122.136,31.508 86.902,6.097 "/>
		</svg>
		<a href="<?php echo $pages->find('formulaire')->url()?>" title="<?php echo $pages->find('formulaire')->title()?>">
			Candidater
		</a>

	</div>
</section>

<section id="<?php echo $data->uid()?>-appel" class="formes">
<!-- 	<div class="inner-content" 
	data-top="top: 100%; left:80%;" 
	data--6500-bottom="top: 100%; left:80%;" 
	data--7000-bottom="top: 50%; left:80%;" 
	data-anchor-target="#slide-6"> -->
		<div class="inner-content" 
	data-top="top: 50%; left:80%; opacity:0;" 
	data--6500-bottom="top: 50%; left:80%; opacity:0;" 
	data--7000-bottom="top: 50%; left:80%; opacity:1;" 
	data-anchor-target="#slide-6">
		<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="155px" height="148.394px" viewBox="0 0 155 148.394" enable-background="new 0 0 155 148.394" xml:space="preserve">
		<polygon fill="#007C15" points="26.935,0 0,69.114 0,112.819 27.952,137.213 39.132,141.278 94.016,148.394 141.787,119.934 
			155,81.31 122.136,31.508 86.902,6.097 "/>
		</svg>
<!-- 		<?php $file = $data->pdf()->toFile();?>
		<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">
			Télécharger l’appel à projets
		</a> -->
		<a href="<?php echo $pages->find('appel-a-projets')->url()?>" title="<?php echo $pages->find('appel-a-projets')->title()?>" target="_blank">
			Télécharger l’appel à projets
		</a>

	</div>
</section>
