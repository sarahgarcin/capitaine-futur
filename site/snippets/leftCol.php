<div class="page-leftCol small-16 medium-3 columns">
<!-- 	<div class="empty-div">
		<p><?php //echo $page->title()->html()?></p>
	</div> -->
	<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
		<nav class="gn3t-menu">
			<ul>
			<?php foreach($page->parent()->children()->visible() as $child):?>
			<li>
				<a <?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">
					<?php echo $child->title()->html();?>
				</a>			
			</li>
			<?php endforeach ?>
			</ul>
		</nav>
	<?php endif ?>
	<?php if ($page->intendedTemplate() != "voyage"): ?>
		<?php if($page->thumb()->isNotEmpty()):
				$thumb = $page->thumb()->toFile();?>
			<figure class="page-thumbnail">
				<div class="image-wrapper">
					<?php echo thumb($thumb);?>
				</div>
				<?php if($thumb->caption()->isNotEmpty()):?>
					<figcaption>
						<?php echo  $thumb->caption()->kirbytext();?>
					</figcaption>
				<?php endif;?>
			</figure>
		<?php endif;?>
	<?php endif ?>
	<!-- Liens rapides -->
	<?php if($page->links()->isNotEmpty()):?>
		<nav class="page-links">
			<h3>Liens rapides</h3>
			<ul>
				<?php foreach($page->links()->toStructure() as $link): ?>
					<li>
						<?php 
							$uid = strval($link->link());
							if($site->index()->findBy('uid', $uid)->intendedTemplate() == 'gn3t'):
								$linkUrl = $site->index()->findBy('uid', $uid)->children()->first()->url(); 
							else:
								$linkUrl = $site->index()->findBy('uid', $uid)->url(); 
							endif;?>
						<a href="<?php echo $linkUrl?>" title="<?php echo $link->linktitle()?>">
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