<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->description()->html()?></h2>
	</div>
	<?php foreach($page->children() as $section):?>
		
		<div class="medium-14 medium-push-4 qui-section">
			<hr>
			<h3><?php echo $section->title()?></h3>
			<ul class="qui-list row">	
			<?php foreach ($section->children() as $qui) :?>
				<li class="medium-4 columns end">
					<a href="<?php echo $qui->url()?>" title="<?php echo $qui->title()?>">
						<?php $thumb = $qui->thumb()->toFile()?>
						<?php if($thumb):?>
							<div class="image-wrapper">
								<img src="<?php echo $thumb->url()?>" alt="<?php echo $qui->title()?>">
								<?php //echo $thumb->crop(600, 400)?>
							</div>
						<?php endif;?>
						<h4><?php echo $qui->title()->html()?></h4>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>
	<?php endforeach; ?>

	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
