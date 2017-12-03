<?php snippet('header') ?>
	
<main class="small-18">
	<div class="wrap small-18">
		<div class="title small-16 medium-14 large-12 xlarge-12">
		  <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
		</div>
		<h2 class="small-16 small-push-1 medium-16 medium-push-1 large-12 large-push-3">
		  <?php echo $site->slogan()->html() ?>
		</h2>
	</div>
</main>
<div class="plan-gauche">
	<img src="<?php echo $site->url()?>/assets/images/plan-1-gauche.png" alt="">
</div>
<div class="plan-droite">
	<img src="<?php echo $site->url()?>/assets/images/plan-1-droite.png" alt="">
</div>

<?php snippet('footer') ?>