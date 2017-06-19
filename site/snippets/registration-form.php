<form action="<?= $page->url() ?>" method="POST" enctype="multipart/form-data">

	<fieldset>
		<legend><?php echo l::get('aboutProject')?></legend>
		<label for="projectTitle"><?php echo l::get('projectTitle')?>*</label>
	  <input name="projectTitle" type="text" value="<?= isset($data['projectTitle']) ? $data['projectTitle'] : '' ?>" required>
		<label for="resume"><?php echo l::get('summary')?>*</label>
		<textarea name="resume" maxlength="1000" required><?= isset($data['resume']) ? $data['resume'] : '' ?></textarea>
		<label for="supernaturel"><?php echo l::get('supernaturel')?>*</label>
		<textarea name="supernaturel" maxlength="1000" required><?= isset($data['supernaturel']) ? $data['supernaturel'] : '' ?></textarea>
		<label for="visitors"><?php echo l::get('visitors')?>*</label>
		<textarea name="visitors" maxlength="500" required><?= isset($data['visitors']) ? $data['visitors'] : '' ?></textarea>
		<label for="space"><?php echo l::get('space')?></label>
		<input type="radio" name="space" value="<?php echo l::get('yes')?>"> <?php echo l::get('yes')?>
		<input type="radio" name="space" value="<?php echo l::get('no')?>"> <?php echo l::get('no')?><br>
	</fieldset>

	<fieldset>
		<legend><?php echo l::get('aboutYou')?></legend>
		<label for="name"><?php echo l::get('name')?>*</label>
	  <input name="name" type="text" value="<?= isset($data['name']) ? $data['name'] : '' ?>" required>
	  <label for="firstname"><?php echo l::get('firstname')?>*</label>
	  <input name="firstname" type="text" value="<?= isset($data['firstname']) ? $data['firstname'] : '' ?>" required>
	  <label for="birthdate"><?php echo l::get('birthdate')?>*</label>
	  <input name="birthdate" type="text" value="<?= isset($data['birthdate']) ? $data['birthdate'] : '' ?>" required>
	  <label for="address"><?php echo l::get('address1')?>*</label>
	  <input name="address" type="text" value="<?= isset($data['address1']) ? $data['address1'] : '' ?>" required>
	  <label for="address2"><?php echo l::get('address2')?></label>
	  <input name="address2" type="text" value="<?= isset($data['adress2']) ? $data['adress2'] : '' ?>">
	  <label for="country"><?php echo l::get('country')?>*</label>
	  <input name="country" type="text" value="<?= isset($data['country']) ? $data['country'] : '' ?>" required>
	  <label for="email">Email*</label>
	  <input name="email" type="email" value="<?= isset($data['email']) ? $data['email'] : '' ?>" required>
	  <label for="phone"><?php echo l::get('phone')?>*</label>
	  <input name="phone" type="text" value="<?= isset($data['phone']) ? $data['phone'] : '' ?>" required>
	  <label for="company"><?php echo l::get('company')?></label>
	  <input name="company" type="text" value="<?= isset($data['company']) ? $data['company'] : '' ?>">
	  <div class="input_fields_wrap-links row">
	  		<button class="small add_links_button small-4 columns right">+ <?php echo l::get('addlink')?></button>
		    <div class="small-14 columns">
		    	<label for="links[]"><?php echo l::get('links')?></label>
		    	<input type="text" name="links[]">
		    </div>
		</div>

		<label for="bio"><?php echo l::get('bio')?>*</label>
		<textarea name="bio" maxlength="500" required><?= isset($data['bio']) ? $data['bio'] : '' ?></textarea>
		<label for="philosophy"><?php echo l::get('philosophy')?>*</label>
		<textarea name="philosophy" maxlength="500" required><?= isset($data['philosophy']) ? $data['philosophy'] : '' ?></textarea>
		<label for="person"><?php echo l::get('person')?></label>
		<textarea name="person"><?= isset($data['person']) ? $data['person'] : '' ?></textarea>
	
	</fieldset>	

	<fieldset>
		<legend><?php echo l::get('docsToSend')?></legend>
		<label for="file"><?php echo l::get('presentation')?>*</label>
		<input class="upload-file" name="file" data-max-size="10000" type="file" >
		<label for="file-folder"><?php echo l::get('folder')?>*</label>
		<input class="upload-file" name="file-folder" data-max-size="10000" type="file"  >
	</fieldset>

	<!-- honey field to prevent from spam -->
	<div class="honey">
     <label for="message">If you are a human, leave this field empty</label>
     <input type="website" name="website" id="website" placeholder="http://example.com" value="<?= isset($data['website']) ? $data['website'] : '' ?>"/>
  </div>

  <input type="submit" name="register" value="<?php echo l::get('submit')?>">
</form>