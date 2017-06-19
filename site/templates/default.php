<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="main-default-wrapper small-16 small-push-1 medium-12 medium-push-3 large-8 large-push-5 xlarge-6 xlarge-push-6">
	<h2><?= $page->title()->html()?></h2>
	<?= $page->text()->kirbytext()?>
</main>

<?php snippet('footer') ?>
