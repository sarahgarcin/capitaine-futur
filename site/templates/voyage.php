<?php snippet('header') ?>

<?php if($page->thumb()->isNotEmpty()):?>
	<div class="big-cover">
		<?php $image = $page->thumb()->toFile();
		echo $image->focusCrop(3000,2000);
		?>

	</div>
<?php endif?>

<main class="wrap small-push-1 medium-push-4 xlarge-push-6">
	<?php snippet("breadcrumb");?>
	<div class="page-title small-16 medium-14">
		<h4><?php echo $page->year()->html()?></h4>
		<h1><?php echo $page->title()->html()?></h1>
		<h2><?php echo $page->subtitle()->html()?></h2>
	</div>
	<div class="row">
		<?php if($page->parent()->intendedTemplate() == "gn3i"): ?>
			<div class="hide-for-small-only">			
				<?php snippet('menu-parent');?>
			</div>
		<?php else: ?>
			<?php snippet('leftCol');?>
		<?php endif ?>

		<div class="page-text small-16 medium-12 large-12 columns end">
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
			<?php if($page->hasAudio()):?>
			<div class="audio">
				<h2>Le mot de Capitaine Futur</h2>
				<?php foreach($page->audio() as $audio): ?>
					<audio controls>
					  <source src="<?php echo $audio->url() ?>" type="<?php echo $audio->mime() ?>">
					</audio>
				<?php endforeach ?>
			</div>
			<?php endif ?>
		</div>
			<?php if($page->parent()->intendedTemplate() == "gn3i"): ?>
				<div class="show-for-small-only">			
					<?php snippet('menu-parent');?>
				</div>
			<?php endif ?>
	</div>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
