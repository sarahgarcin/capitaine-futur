<?php snippet('header') ?>


 	<main id="<?php echo $page->uid()?>">
 		<div class='logo-form small-16 small-push-1 medium-12 medium-push-3 large-10 large-push-5'>
 			<img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
 		</div>
		<div class="inner-form small-16 small-push-1 medium-14 medium-push-2 large-10 large-push-4">
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
			<?php
				// if the form was successfully submitted and the page created, show the success message
				if(isset($success)): ?>
				  <div class="message">
				    <?php echo $success; ?>
				  </div>
				<?php endif ?>
				<?php
					// if the form input does not validate, show a list of alerts
					if($alert): ?>
					  <div class="alert" style='color:red'>
					    <?php echo $alert; ?>
					  </div>
					<?php endif ?>

					<?php if(!isset($success)) {
					  // if the $success variable is not set, show the form (i.e. when the page is first loaded or the form submission was not successful)
					  snippet('registration-form', compact('data'));
					}
				?>
			</div>

		</div>

 	</main>

<?php snippet('footer') ?>