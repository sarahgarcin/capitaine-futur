<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14 xlarge-push-10">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row blog-description">
		<div class="page-author small-18 medium-4 medium-push-1 large-6 large-push-4 xlarge-push-10 columns">
			<?php echo $page->authors()->kirbytext()?>
		</div>
		<div class="page-text small-18 medium-12 medium-push-1 large-12 large-push-1 xlarge-push-7 columns end">
			<?php echo $page->description()->kirbytext()?>
		</div>
	</div>
	<?php snippet('galerie-image')?>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
