<?php snippet('header') ?>

<main class="wrap medium-push-4 xlarge-push-6">
	<?php snippet('breadcrumb') ?>

	<div class="page-title medium-14">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<div class="row">
		<?php snippet('leftCol');?>
		
		<div class="page-text small-18 medium-12 large-12 columns end <?php if($page->uid() == 'le-personnage'):?>capitaine-futur<?php endif ?>">
			<?php echo $page->text()->kirbytext()?>
		</div>
	</div>
	
</main>
<?php snippet('trame') ?>
<div class="blur"></div>

<?php snippet('footer') ?>
