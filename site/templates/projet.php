<?php snippet('header') ?>
<?php snippet('menu') ?>

<main>
	<ul class="images">
		<?php foreach($page->images() as $image):?>
				<li class="small-12">
					<img src="<?= $image->url() ?>" alt="<?= $page->title()?>">
				</li>
				<div class="legendes">
					<h2><?= $page->title()->html() ?></h2>
					<h3><?= $page->indices()->html() ?></h3>
					<h4><?= $page->year()->html() ?></h4>
					<?= $page->text()->kirbytext()?>
				</div>
		<?php endforeach ?>
	</ul>
</main>


<?php snippet('footer') ?>
