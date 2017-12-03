<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		<div class="page-text small-18 large-12 large-push-2 columns end">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	<?php snippet('galerie-image');
	snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
