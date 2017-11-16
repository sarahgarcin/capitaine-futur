<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title small-push-4">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row">
		<div class="page-author small-18 large-6 large-push-4 columns">
			<?php echo $page->authors()->kirbytext()?>
		</div>
		<div class="page-text small-18 large-12 large-push-1 columns">
			<?php echo $page->description()->kirbytext()?>
		</div>
		<?php snippet('galerie-image')?>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
