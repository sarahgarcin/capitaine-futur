<?php snippet('header') ?>

<main class="wrap small-push-1 medium-push-4 xlarge-push-6">
	<?php snippet('breadcrumb') ?>
	<div class="page-title small-16 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		<div class="page-text small-16 large-12 columns end">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	<?php snippet('galerie-image');?>
	
</main>
<?php snippet('trame') ?>
<div class="blur"></div>

<?php snippet('footer') ?>
