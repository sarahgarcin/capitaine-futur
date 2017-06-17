<?php snippet('header') ?>

 	<main id="<?php echo $page->uid()?>">
 		<div class='logo-form small-16 small-push-1 medium-10 medium-push-5'>
 			<img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
 		</div>
		<div class="inner-form small-16 small-push-1 medium-10 medium-push-4">
			<ul class="languages">
		    <?php foreach($site->languages() as $language): ?>
		    <li<?php e($site->language() == $language, ' class="active"') ?>>
		      <a href="<?php echo $page->url($language->code()) ?>">
		        <?php echo html($language->name()) ?>
		      </a>
		    </li>
		    <?php endforeach ?>
		  </ul>
			<h2><?php echo l::get('applyForm')?></h2>
			<hr>
			<div class="text-wrapper">
				<form action="<?php echo $page->url() ?>" method="POST">

					 <fieldset>
	    			<legend><?php echo l::get('aboutProject')?></legend>
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
					</fieldset>

					<fieldset>
	    			<legend><?php echo l::get('aboutYou')?></legend>
						<label for="name"><?php echo l::get('name')?>*</label>
					  <input name="name" type="text" value="" required>
					  <label for="firstname"><?php echo l::get('firstname')?>*</label>
					  <input name="firstname" type="text" value="" required>
					  <label for="birthdate"><?php echo l::get('birthdate')?>*</label>
					  <input name="birthdate" type="text" value="" required>
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
					  <label for="company"><?php echo l::get('company')?></label>
					  <input name="company" type="text" value="">
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
						<label for="person"><?php echo l::get('person')?></label>
						<textarea name="person"></textarea>
					
					</fieldset>	

					<fieldset>
	    			<legend><?php echo l::get('docsToSend')?></legend>
						<label for="file"><?php echo l::get('presentation')?>*</label>
						<input class="upload-file" name="file" data-max-size="7000" type="file" >
						<label for="file"><?php echo l::get('folder')?>*</label>
						<input class="upload-file" name="file" data-max-size="7000" type="file"  >
					</fieldset>
				  <input type="submit" value="<?php echo l::get('submit')?>">
				</form>
			</div>

		</div>

 	</main>

<?php snippet('footer') ?>