<?php snippet('header') ?>
	
<main class="small-18">
	<div class="wrap small-18">
		<div class="title small-18 medium-18 large-18 xlarge-18">
		  <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
		</div>
		<h2 class="small-16 small-push-1 medium-16 medium-push-1 large-12 large-push-3">
		  <?php echo $site->slogan()->html() ?>
		</h2>
	</div>
</main>

<?php snippet('footer') ?>