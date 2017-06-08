<?php snippet('header') ?>
<?php snippet('menu') ?>

 	<main>
 		<div>
 			<a onclick="if(document.referrer.indexOf(window.location.host) !== -1) { history.go(-1); return false; } else { window.location.href = '<?php echo $site->url()?>'; }" title="<?php echo $site->title()?>">
				<
			</a>
 		</div>
		<div class="small-16 small-push-1 medium-8 medium-push-5">
			<h2><?php echo l::get('apply')?></h2>
			<div class="text-wrapper">
				<form action="<?php echo $page->url() ?>" method="POST">
					<label for="name">Nom</label>
				  <input name="name" type="text" value="" required>
				  <label for="firstname">Prénom</label>
				  <input name="firstname" type="text" value="" required>
				  <label for="birthdate">Date de naissance</label>
				  <input name="birthdate" type="date" value="" >
				  <label for="address">Adresse 1</label>
				  <input name="address" type="text" value="" >
				  <label for="address">Adresse 2</label>
				  <input name="address" type="text" value="" >
				  <label for="country">Pays</label>
				  <input name="country" type="text" value="" >
				  <label for="email">Email</label>
				  <input name="email" type="email" value="">
				  <label for="phone">Téléphone</label>
				  <input name="phone" type="text" value="">
				  <label for="company">Collectif</label>
				  <input name="company" type="text" value="">
<!-- 				  <label for="liens1">Lien 1</label>
				  <input name="liens1" type="link" value="">
				  <label for="liens2">Lien 2</label>
				  <input name="liens2" type="link" value=""> -->
				  <div class="input_fields_wrap-links">
					    <div>
					    	<label for="links[]">Lien</label>
					    	<input type="text" name="links[]">
					    </div>
					    <button class="small add_links_button">+ Ajouter un lien</button>
					</div>

					<label for="resume">Résumé du projet (1000 signes max)</label>
					<textarea name="resume" maxlength="1000" ></textarea>
					<label for="bio">Biographie de l’artiste (1000 signes max)</label>
					<textarea name="bio" maxlength="1000" ></textarea>
					<label for="supernaturel">Expliciter le lien du projet avec le sujet « supernaturel » (1000 signes max)</label>
					<textarea name="supernaturel" maxlength="1000" ></textarea>
					<label for="presentation">Présentation du projet comprenant note d’intention, schémas et informations techniques, planning, budget (7Mo max)</label>
					<input class="upload-file" name="presentation" data-max-size="7000" type="file" >
					<label for="dossier">Dossier artistique de(s) artiste(s) incluant des travaux passés et un CV (7Mo max)</label>
					<input class="upload-file" name="dossier" data-max-size="7000" type="file" >

				   <input type="submit" value="Submit">
				</form>
	
</div>

		</div>
		</section>

 	</main>

<?php snippet('footer') ?>