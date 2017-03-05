<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php 
// Transform the comma-separated list of filenames into a file collection
$filenames = $page->imageProjet()->split(',');
if(count($filenames) < 2) $filenames = array_pad($filenames, 2, '');
$files = call_user_func_array(array($page->files(), 'find'), $filenames);
?>

<main>
	<ul class="images">
		<div class="legendes small-11 large-6 large-push-1">
			<?php $tags = $page->indices()->split(',');?>
			<h2><?= $page->title()->html(); ?></h2>
			<h3>
			<?php foreach($tags as $key => $tag): ?>
				<span><?php echo $tag ?></span>
				<?php if($key != count($tags)-1):?>
					<span>-</span>
				<?php endif ?>
			<?php endforeach ?>
			</h3>
			<h4><?= $page->year()->html() ?></h4>
			<?= $page->text()->kirbytext()?>
		</div>
		<?php foreach($files as $file):?>
				<li class="small-12 large-10 large-push-1">
					<?php
            echo kirbytag(array(
        		  'image' => $file->filename(),
        		  'url' => $file->url(),
        		  // 'thumbwidth' => 1200,
        		  'outputlink' => false,
        		  'optimumx'=> 2,
        		  'return_srcset' => false,
        		  'multisizes' => true,
        		  'originalPage'  => $page,
        		  'alt'=> $page->title(),
        		  'itemprop' => "image",
        		  'data-caption' => $page->title(),
        		  'legende' => $file->caption(),
        		));
	         ?>
				</li>
		<?php endforeach ?>
	</ul>
</main>


<?php snippet('footer') ?>
