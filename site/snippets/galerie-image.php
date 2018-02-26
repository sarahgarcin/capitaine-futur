<div class="menu-image small-16 medium-14">
	<ul class="row">
	  <?php foreach($page->children()->visible() as $project): ?>
	    <li class="medium-9 large-6 column end">
	        <a href="<?= $project->url() ?>">
	          <?php if($image = $project->thumb()->toFile()): $thumb = $image->crop(640, 460); ?>
	            <div class="image-wrapper">
	            	<img src="<?= $thumb->url() ?>" alt="Thumbnail for <?= $project->title()->html() ?>" class="showcase-image" />
	         		</div>
	          <?php endif ?>
	          <div class="showcase-caption">
	          	<h4 class="showcase-date"><?= $project->year()->html() ?></h4>
	            <h3 class="showcase-title"><?= $project->title()->html() ?></h3>
	          </div>
	        </a>
	    </li>

	  <?php endforeach ?>

	</ul>

</div>