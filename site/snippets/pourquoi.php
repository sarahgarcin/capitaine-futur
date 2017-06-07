<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-6 medium-push-10" 
	data-top="top: 15%; left:5%;" 
	data-bottom="top: 15%; left:5%" 
	data--500-bottom="top:15%; left:5%"
	data--1000-bottom="top:15%; left:-100%;"
	data-anchor-target="#slide-1"
	>
		<?php echo $data->text()->kirbytext() ?>
	</div>
</section>

<section id="<?php echo $data->uid()?>-appel" class="formes">
	<div class="inner-content" 
	data-top="top: 30%; left:70%;" 
	data-bottom="top: 60%; left:70%;" 
	data--500-bottom="top: 60%; left:70%;"
	data--1000-bottom="top: 60%; left:100%;"
	data-anchor-target="#slide-1">
	<svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="170px" height="311.539px" viewBox="0 0 170 311.539" enable-background="new 0 0 170 311.539" xml:space="preserve">
	<g>
		<polygon fill="#FFFFFF" points="50,311.539 86,311.539 170,200.766 122,33.766 65,0 8,59.539 0,208.628 	"/>
		<polyline opacity="0.05" fill="#046937" points="8,59.539 122,33.766 86,311.539 8,59.539 	"/>
	</g>
	</svg>
		<a href="#appel-a-projets" title="<?php echo $pages->find('appel-a-projets')->title()?>">
			Voir <br>l'appel <br>à<br>projets
		</a>
	</div>
</section>