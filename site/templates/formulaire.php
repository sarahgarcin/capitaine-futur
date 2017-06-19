<?php snippet('header') ?>


 	<main id="<?php echo $page->uid()?>">
 		<div class="back-to-website small-16 small-push-1">
 			<a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>">
 			← <?php echo l::get('back')?>
 			</a>
 		</div>
 		<div class='logo-form small-16 small-push-1 medium-12 medium-push-3 large-10 large-push-5 xlarge-10 xlarge-push-6'>
 			<a href="<?php echo $site->url()?>" title="<?php echo $site->title()?>">
 				<img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
 			</a>
 		</div>
		<div class="inner-form small-16 small-push-1 medium-14 medium-push-2 large-10 large-push-4 xlarge-8 xlarge-push-5">
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
			<p><?php echo l::get('required')?></p>
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