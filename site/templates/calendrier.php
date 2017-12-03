<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="">
	<div class="page-title medium-push-4 medium-14">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<?php snippet('calendar') ?>
</main>

<?php snippet('footer') ?>
