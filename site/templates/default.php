<?php snippet('header') ?>

<main class="wrap">
	<div class="page-title small-push-4">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		<div class="page-text small-18 large-12 large-push-2 columns end">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	<div class="page-trame">
		<img src="<?php echo $site->url()?>/assets/images/trame-article.png" alt="">
	</div>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
