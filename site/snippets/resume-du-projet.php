<section id="<?php echo $data->uid()?>">
  <h1><?php echo $data->title()->html() ?></h1>
  <h2><?php echo $data->slogan()->html() ?></h2>
  <?php if($site->logo()->isNotEmpty): ?>
	  <div class="logo medium-2 ">
			<a href="<?php echo $site->url()?>" title="<?php echo $site->title() ?>" >
				<img src="<?php echo $site->logo()->toFile()->url() ?>" alt="<?php echo $site->title() ?>">
			</a>
		</div>
	<?php endif; ?>
  <?php echo $data->text()->kirbytext() ?>
  <?php echo $data->mentions()->kirbytext() ?>

</section>