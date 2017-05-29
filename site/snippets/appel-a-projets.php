<section id="<?php echo $data->uid()?>" class="textCartel">
<!-- 	<div class="inner-content small-16 small-push-1 medium-6 medium-push-1" 
	data-top="top: 12%; left:-100%;" 
	data-bottom="top: 12%; left:3%;" 
	data-anchor-target="#slide-1"> -->
	<div class="inner-content small-16 small-push-1 medium-6 medium-push-1" >
		<h2><?php echo $data->title()->html() ?></h2>
		<div class="text-wrapper small-16 small-push-2">
			<?php echo $data->text()->kirbytext() ?>
		</div>
	</div>
</section>

<section id="<?php echo $data->uid()?>-appel" class="formes">
<!-- 	<div class="inner-content" 
	data-top="top: 49%; left:-100%;" 
	data-bottom="top: 49%; left:40%;" 
	data-anchor-target="#slide-1"> -->
	<div class="inner-content" >
		<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="155px" height="148.394px" viewBox="0 0 155 148.394" enable-background="new 0 0 155 148.394" xml:space="preserve">
		<polygon fill="#007C12" points="26.935,0 0,69.114 0,112.819 27.952,137.213 39.132,141.278 94.016,148.394 141.787,119.934 
			155,81.31 122.136,31.508 86.902,6.097 "/>
		</svg>
		<?php $file = $data->pdf()->toFile();?>
		<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">
			Télécharger l’appel à projets
		</a>
	</div>
</section>

<section id="<?php echo $data->uid()?>-form" class="textCartel">
<!-- 	<div class="inner-content small-16 small-push-1 medium-6 medium-push-1" 
	data-top="top: 12%; left:-100%;" 
	data-bottom="top: 12%; left:3%;" 
	data-anchor-target="#slide-1"> -->
	<div class="inner-content small-16 small-push-1 medium-6 medium-push-10" >
		<h2>Candidater</h2>
		<div class="text-wrapper small-16 small-push-2">
			<form action="<?php echo $page->url() ?>" method="POST">
				<label for="email">Email</label>
			   <input name="email" type="email" value="<?php echo $form->old('email'); ?>">
			   <label for="message">Message</label>
			   <textarea name="message"><?php echo $form->old('message'); ?></textarea>
			   <?php echo csrf_field(); ?>
			   <?php echo honeypot_field(); ?>
			   <input type="submit" value="Submit">
			</form>
			<?php if ($form->success()): ?>
			   <h3>Success!</h3>
			<?php else: ?>
			   <?php snippet('uniform/errors', ['form' => $form]); ?>
			<?php endif; ?>
		</div>
	</div>
</section>
