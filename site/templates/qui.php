<?php snippet('header') ?>
<main class="wrap small-push-1 medium-push-4 xlarge-push-5">
	<?php snippet('breadcrumb') ?>
	<div class="page-title small-16 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->description()->html()?></h2>
	</div>
	<?php foreach($page->children()->visible() as $section):?>
		
		<div class="small-16 medium-14 qui-section">
			<hr>
			<h3><?php echo $section->title()?></h3>
			<ul class="qui-list row">	
			<?php foreach ($section->children()->visible() as $qui) :?>
				<li class="medium-4 columns end">
					<a href="<?php echo $qui->url()?>" title="<?php echo $qui->title()?>">
						<?php $thumb = $qui->thumbnail()->toFile()?>
						<?php if($thumb):?>
							<div class="image-wrapper">
								<img src="<?php echo $thumb->url()?>" alt="<?php echo $qui->title()?>">
								<?php //echo $thumb->crop(600, 400)?>
							</div>
						<?php endif;?>
						<?php if($section->uid() != "les-partenaires"):?>
							<h4><?php echo $qui->title()->html()?></h4>
						<?php endif; ?>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endforeach; ?>

	
</main>
<?php snippet('trame') ?>
<div class="blur"></div>

<?php snippet('footer') ?>
