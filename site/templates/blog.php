<?php snippet('header') ?>

<main class="wrap small-push-1 medium-push-4 xlarge-push-5">
	<?php snippet('breadcrumb') ?>
	<div class="page-title small-16 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="blog-description small-16 medium-12 large-12">
			<div class="page-author">
				<?php echo $page->authors()->kirbytext()?>
			</div>
			<div class="page-text">
				<?php echo $page->description()->kirbytext()?>
			</div>
	</div>
	<?php snippet('galerie-image')?>
	
</main>
<?php snippet('trame') ?>
<div class="blur"></div>

<?php snippet('footer') ?>
