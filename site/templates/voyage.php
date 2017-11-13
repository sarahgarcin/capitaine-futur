<?php snippet('header') ?>

<?php if($page->thumb()->isNotEmpty()):?>
<div class="big-cover">
	<?php $image = $page->thumb()->toFile();?>
	<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>"/>
</div>
<?php endif?>
<?php snippet("breadcrumb");?>
<main class="wrap">
	<div class="page-title small-push-4">
		<h4><?php echo $page->year()->html()?></h4>
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->subtitle()->html()?></h2>
	</div>
	<div class="row">
		<?php snippet('menu-parent');?>
		<div class="page-texte small-18 large-12 large-push-2 columns end">
			<div class="description">
				<?php echo $page->description()->kirbytext()?>
			</div>
			<?php if($page->imagesSlider()->isNotEmpty()):?>
				<div class="page-slider">
					<?php $filenames = $page->imagesSlider()->split(',');
					if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
					$files = call_user_func_array(array($page->files(), 'find'), $filenames);?>
					<ul class="slider js_slides">
	    			<?php foreach($files as $slide): ?>
	     				<li class="slider-image">
	     					<?php $image = $slide->crop(1200, 800)?>
	    					<img src="<?php echo $image->url()?>">
	      			</li>
	      		<?php endforeach; ?>
	      	</ul>
				</div>
			<?php endif; ?>
			<div class="texte">
				<?php echo $page->text()->kirbytext()?>
			</div>
		</div>

	</div>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
