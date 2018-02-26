<div class="page-menu-parent small-16 medium-3 columns">

	<nav>
		<h3>
			<a href="<?php echo $site->index()->findBy('uid','voyages-passes')->url()?>" title="<?php echo $site->index()->findBy('uid','voyages-passes')->title()?>">
				<?php echo $site->index()->findBy('uid','voyages-passes')->title()?></h3>
			</a>
		<ul class="row">
			<?php foreach($site->index()->findBy('uid','voyages-passes')->children()->visible()->flip() as $child):?>
			<li class="small-9 medium-18 columns end">
				<a <?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">
					<?php if($image = $child->thumb()->toFile()): $thumb = $image->crop(160, 50); ?>
            <div class="image-wrapper">
            	<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $child->title()->html() ?>" class="showcase-image" />
         		</div>
          <?php endif ?>
					<?php echo $child->title()->html();?>
				</a>			
			</li>
			<?php endforeach ?>
		</ul>
	</nav>
</div>