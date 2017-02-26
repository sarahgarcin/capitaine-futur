<?php snippet('header') ?>
<?php snippet('menu') ?>

<main>
	<ul class="row projets">
		<?php foreach($page->children()->visible() as $project):
			$thumb = $project->thumbnail()->toFile();
			if($thumb):?>
				<li class="small-12 columns left">
					<a href="<?php echo $project->url()?>" title="<?php echo $project->title()?>">
						<img src="<?= $thumb->url() ?>" alt="<?= $project->title()?>">
					</a>
					<div class="legendes">
						<h2><?= $project->title()->html() ?></h2>
						<h3><?= $project->indices()->html() ?></h3>
						<h4><?= $project->year()->html() ?></h4>
					</div>
				</li>
			<?php endif; ?>
		<?php endforeach ?>
	</ul>
</main>


<?php snippet('footer') ?>
