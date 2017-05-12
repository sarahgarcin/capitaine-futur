<section id="<?php echo $data->uid()?>">
  <h1><?php echo $data->title()->html() ?></h1>
  <?php echo $data->text()->kirbytext() ?>
</section>
