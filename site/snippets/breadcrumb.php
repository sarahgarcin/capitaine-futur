<nav class="breadcrumb small-push-3 <?php if($page->thumb()->isEmpty()):?>no-cover<?php endif?>">
  <ul>
    <?php foreach($site->breadcrumb() as $crumb): ?>
    <li<?php e($crumb->isActive(), ' class="is-active"') ?>>
    	<a href="<?php echo $crumb->url() ?>">
    		<?php echo $crumb->title()->html() ?>
    	</a>
    </li>
    <?php endforeach; ?>
  </ul>
</nav>