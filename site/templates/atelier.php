<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->description()->html()?></h2>
	</div>
	<?php foreach($page->children()->flip() as $atelier):?>
		<div class="date-atelier medium-push-4 medium-14">
			<h2><?php echo $atelier->title()->html()?></h2>
			<ul class="atelier-images-gallerie row">
				<?php foreach($atelier->images() as $image):?>
					<li class="small-9 medium-6 columns end">
						<img src="<?php echo $image->url()?>" alt="<?php echo $image->name()?>">
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endforeach; ?>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
