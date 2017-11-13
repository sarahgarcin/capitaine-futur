<div class="page-menu-parent small-18 large-5 large-push-2 columns">

	<nav>
		<h3><?php echo $site->index()->findBy('uid','voyages-passes')->title()?></h3>
		<ul>
			<?php foreach($site->index()->findBy('uid','voyages-passes')->children()->visible()->flip() as $child):?>
			<li>
				<a <?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url()?>" title="<?php echo $child->title()?>">
					<?php echo $child->title()->html();?>
				</a>			
			</li>
			<?php endforeach ?>
		</ul>
	</nav>
</div>