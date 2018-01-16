<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->description()->html()?></h2>
	</div>
	<?php foreach($page->children()->flip() as $atelier):?>
		<div class="date-atelier medium-push-4 medium-14">
			<hr>
			<h6><?php echo $atelier->title()->html()?></h6>
			<ul class="atelier-images-gallerie row">
			<div class="photoswipe" itemscope itemtype="http://schema.org/ImageGallery">
				<div class="row">
				<?php foreach($atelier->images() as $image):?>
					<figure class="small-9 medium-6 columns end" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
						<a href="<?= $image->url(); ?>" itemprop="contentUrl" data-size="<?= $image->width(); ?>x<?= $image->height(); ?>" title="<?= $image->text()->value(); ?>">
							<img src="<?= $image->crop(400, 300)->url(); ?>" itemprop="thumbnail" alt="<?= $page->title()->value() ?> <?= $image->text()->value(); ?>" class="img-responsive"/>
						</a>
					</figure>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endforeach; ?>

	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
