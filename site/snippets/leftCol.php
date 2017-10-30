<div class="page-leftCol small-18 large-5 large-push-2 columns">
	<figure class="page-thumbnail">
		<?php 
			if($page->thumb()->isNotEmpty()):
				$thumb = $page->thumb()->toFile();?>
				<div class="image-wrapper">
					<?php echo thumb($thumb);?>
				</div>
				<?php if($thumb->caption()->isNotEmpty()):?>
					<figcaption>
						<?php echo  $thumb->caption()->kirbytext();?>
					</figcaption>
				<?php endif;?>
			<?php endif;?>
	</figure>
	<!-- Liens rapides -->
	<?php if($page->links()->isNotEmpty()):?>
		<nav class="page-links">
			<h3>Liens rapides</h3>
			<ul>
				<?php foreach($page->links()->toStructure() as $link): ?>
					<li>
						<a href="<?php echo $link->link()?>" title="<?php echo $link->linktitle()?>">
							<?php echo $link->linktitle()?>
						</a>
					</li>
				<?php endforeach ?>
			</ul>
		</nav>
	<?php endif; ?>
	<!-- Images gallery on left col -->
	<?php if($page->imagesLeft()->isNotEmpty()):
		$filenames = $page->imagesLeft()->split(',');
		if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
		$files = call_user_func_array(array($page->files(), 'find'), $filenames);?>
		<ul>
			<?php foreach($files as $file):?>
				<li>
					<figure>
						<div class="image-wrapper">
							<img src="<?php echo $file->url();?>" alt="<?php echo $file->title();?>">
						</div>
						<?php if($file->caption()->isNotEmpty()):?>
							<figcaption><?php echo $file->caption();?></figcaption>
						<?php endif;?>
					</figure>
				</li>	
			<?php endforeach ?>
		</ul>
	<?php endif ?>
	

</div>