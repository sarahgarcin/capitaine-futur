<nav class="breadcrumb medium-push-3 xlarge-push-5 <?php if($page->thumb()->isEmpty()):?>no-cover<?php endif?>">
  <ul>
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <li>
    	<a <?php e($crumb->isActive(), ' class="active"') ?> href="<?php if($crumb->intendedTemplate() == 'gn3t'):echo $crumb->children()->first()->url(); else:echo $crumb->url(); endif;?>">
    		<?php echo $crumb->title()->html() ?>
    	</a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>