<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">

	<div class="page-title medium-push-4 medium-14">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		
		<div class="page-text small-18 medium-12 large-12 large-push-2 columns end <?php if($page->uid() == 'le-personnage'):?>capitaine-futur<?php endif ?>">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
