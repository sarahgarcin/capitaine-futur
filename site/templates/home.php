<?php snippet('header') ?>
<?php snippet('menu') ?>

<main>
	<ul class="row projets">
		<?php foreach($page->children()->visible() as $project):
			$thumb = $project->thumbnail()->toFile();
			if($thumb):?>
				<li class="small-12 large-2 columns left">
					<a href="<?php echo $project->url()?>" title="<?php echo $project->title()?>">
						<?php
              echo kirbytag(array(
          		  'image'  				=> $thumb->filename(),
          		  'thumbwidth' 		=> 500,
          		  'outputlink'     => false,
          		  'optimumx'=> 2,
          		  'return_srcset' => false,
          		  'multisizes' => true,
          		  'originalPage'  => $project,
          		  'alt'=> $project->title(),
          		  'itemprop' => "image",
          		  'data-caption' => $project->title()
          		));
	           ?>
						<!-- <img src="<?= $thumb->url() ?>" alt="<?= $project->title()?>"> -->
					</a>
					<div class="legendes">
						<?php $tags = $project->indices()->split(',');?>
						<h2><?= $project->title()->html() ?></h2>
						<h3>
							<?php foreach($tags as $key => $tag): ?>
								<span><?php echo $tag ?></span>
								<?php if($key != count($tags)-1):?>
									<span>-</span>
								<?php endif ?>
							<?php endforeach ?>
						</h3>
						<h4><?= $project->year()->html() ?></h4>
					</div>
				</li>
			<?php endif; ?>
		<?php endforeach ?>
	</ul>
</main>


<?php snippet('footer') ?>
