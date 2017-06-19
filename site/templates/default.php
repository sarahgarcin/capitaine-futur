<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="small-8 small-push-5">
	<h2><?= $page->title()->html()?></h2>
	<?= $page->text()->kirbytext()?>
</main>

<?php snippet('footer') ?>
