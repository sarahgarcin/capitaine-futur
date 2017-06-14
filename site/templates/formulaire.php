<?php snippet('header') ?>
<?php snippet('menu') ?>

 	<main id="<?php echo $page->uid()?>">
 		<div class="retour">
 			<a onclick="if(document.referrer.indexOf(window.location.host) !== -1) { history.go(-1); return false; } else { window.location.href = '<?php echo $site->url()?>'; }" title="<?php echo $site->title()?>">
				< <?php echo l::get('back')?>
			</a>
 		</div>
		<div class="small-16 small-push-1 medium-8 medium-push-5">
			<h2><?php echo l::get('apply')?></h2>
			<div class="text-wrapper">
				<form action="<?php echo $page->url() ?>" method="POST">
					<label for="name"><?php echo l::get('name')?>*</label>
				  <input name="name" type="text" value="" required>
				  <label for="firstname"><?php echo l::get('firstname')?>*</label>
				  <input name="firstname" type="text" value="" required>
				  <label for="birthdate"><?php echo l::get('birthdate')?>*</label>
				  <input name="birthdate" type="date" value="" required>
				  <label for="address"><?php echo l::get('address1')?>*</label>
				  <input name="address" type="text" value="" required>
				  <label for="address2"><?php echo l::get('address2')?></label>
				  <input name="address2" type="text" value="" required>
				  <label for="country"><?php echo l::get('country')?>*</label>
				  <input name="country" type="text" value="" required>
				  <label for="email">Email*</label>
				  <input name="email" type="email" value="" required>
				  <label for="phone"><?php echo l::get('phone')?>*</label>
				  <input name="phone" type="text" value="" required>
<!-- 				  <label for="company"><?php echo l::get('company')?></label>
				  <input name="company" type="text" value=""> -->
				  <div class="input_fields_wrap-links row">
				  		<button class="small add_links_button small-4 columns right">+ <?php echo l::get('addlink')?></button>
					    <div class="small-14 columns">
					    	<label for="links[]"><?php echo l::get('links')?></label>
					    	<input type="text" name="links[]">
					    </div>
					 
					</div>
					<label for="bio"><?php echo l::get('bio')?>*</label>
					<textarea name="bio" maxlength="500" required></textarea>
					<label for="philosophy"><?php echo l::get('philosophy')?>*</label>
					<textarea name="philosophy" maxlength="500" required></textarea>
					<label for="projectTitle"><?php echo l::get('projectTitle')?>*</label>
				  <input name="projectTitle" type="text" value="" required>
					<label for="resume"><?php echo l::get('summary')?>*</label>
					<textarea name="resume" maxlength="1000" required></textarea>
					<label for="supernaturel"><?php echo l::get('supernaturel')?>*</label>
					<textarea name="supernaturel" maxlength="1000" required></textarea>
					<label for="visitors"><?php echo l::get('visitors')?>*</label>
					<textarea name="visitors" maxlength="500" required></textarea>
					<label for="space"><?php echo l::get('space')?></label>
					<input type="radio" name="space" value="<?php echo l::get('yes')?>"> <?php echo l::get('yes')?>
  				<input type="radio" name="space" value="<?php echo l::get('no')?>"> <?php echo l::get('no')?><br>
					
					<label for="presentation"><?php echo l::get('presentation')?>*</label>
					<input class="upload-file" name="file" data-max-size="7000" type="file" >
					<label for="dossier"><?php echo l::get('folder')?>*</label>
					<input class="upload-file" name="file" data-max-size="7000" type="file"  >

				  <input type="submit" value="<?php echo l::get('submit')?>">
				</form>
			</div>

		</div>

 	</main>

<?php snippet('footer') ?>