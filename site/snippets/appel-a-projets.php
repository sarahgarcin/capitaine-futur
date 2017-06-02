<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-6 medium-push-1" 
	data-top="top: 15%; left:-100%;" 
	data--8500-bottom="top: 15%; left:-50%;" 
	data--9000-bottom="top: 15%; left:3%;" 
	data-anchor-target="#slide-6">
		<h2><?php echo $data->title()->html() ?></h2>
		<div class="text-wrapper small-16 small-push-2">
			<?php echo $data->text()->kirbytext() ?>
		</div>
	</div>
</section>

<section id="<?php echo $data->uid()?>-appel" class="formes">
	<div class="inner-content" 
	data-top="top: 100%; left:40%;" 
	data--8500-bottom="top: 100%; left:40%;" 
	data--9000-bottom="top: 49%; left:40%;" 
	data-anchor-target="#slide-6">
		<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="155px" height="148.394px" viewBox="0 0 155 148.394" enable-background="new 0 0 155 148.394" xml:space="preserve">
		<polygon fill="#007C15" points="26.935,0 0,69.114 0,112.819 27.952,137.213 39.132,141.278 94.016,148.394 141.787,119.934 
			155,81.31 122.136,31.508 86.902,6.097 "/>
		</svg>
		<?php $file = $data->pdf()->toFile();?>
		<a href="<?php echo $file->url()?>" title="<?php echo $file->url()?>" target="_blank">
			Télécharger l’appel à projets
		</a>
	</div>
</section>

<section id="<?php echo $data->uid()?>-form" class="textCartel">
	<div class="inner-content small-16 small-push-1 medium-6 medium-push-10" 
	data-top="top: 15%; left:100%;" 
	data--8500-bottom="top: 15%; left:100%;" 
	data--9000-bottom="top: 15%; left:60%;" 
	data-anchor-target="#slide-6">
		<h2>Candidater</h2>
		<div class="text-wrapper small-16 small-push-2">
			<form action="<?php echo $page->url() ?>" method="POST">
				<label for="name">Nom</label>
			  <input name="name" type="text" value="<?php echo $form->old('name'); ?>" required>
			  <label for="firstname">Prénom</label>
			  <input name="firstname" type="text" value="<?php echo $form->old('firstname'); ?>" required>
			  <label for="birthdate">Date de naissance</label>
			  <input name="birthdate" type="date" value="<?php echo $form->old('birthdate'); ?>" required>
			  <label for="address">Adresse</label>
			  <input name="address" type="text" value="<?php echo $form->old('address'); ?>" required>
			  <label for="country">Pays</label>
			  <input name="country" type="text" value="<?php echo $form->old('country'); ?>" required>
			  <label for="email">Email</label>
			  <input name="email" type="email" value="<?php echo $form->old('email'); ?>">
			  <label for="website">Site internet</label>
			  <input name="website" type="link" value="<?php echo $form->old('website'); ?>">
			  <label for="videoLink">Lien vers vidéo</label>
			  <input name="videoLink" type="link" value="<?php echo $form->old('videoLink'); ?>">

				<label for="resume">Résumé du projet (1000 signes max)</label>
				<textarea name="resume" maxlength="1000" required><?php echo $form->old('resume'); ?></textarea>
				<label for="bio">Biographie de l’artiste (1000 signes max)</label>
				<textarea name="bio" maxlength="1000" required><?php echo $form->old('bio'); ?></textarea>
				<label for="supernaturel">Expliciter le lien du projet avec le sujet « supernaturel » (1000 signes max)</label>
				<textarea name="supernaturel" maxlength="1000" required><?php echo $form->old('supernaturel'); ?></textarea>
				<label for="presentation">Présentation du projet comprenant note d’intention, schémas et informations techniques, planning, budget (7Mo max)</label>
				<input class="upload-file" name="presentation" data-max-size="7000" type="file" >
				<label for="dossier">Dossier artistique de(s) artiste(s) incluant des travaux passés et un CV (7Mo max)</label>
				<input class="upload-file" name="dossier" data-max-size="7000" type="file" >
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
