<?php snippet('header') ?>

<main class="wrap small-push-1 medium-push-4 xlarge-push-6">
	<?php snippet('breadcrumb') ?>
	<div class="section-content">
		<div class="section-title page-title small-16 medium-14">
			<h1><?php echo $page->title()->html()?></h1>
		</div>
		<?php $articles = $page->children()->visible()->flip()->paginate(10) ;
					$pagination = $articles->pagination();
		?>
		<?php foreach($articles as $article):?>
			<div class="section-article page-text small-16 medium-12">
				<h2><?php echo $article->title()->html()?></h2>
				<!-- <h3 class="dates"><?php //echo $article->modified('d/m/Y');?></h3> -->
				<?php echo $article->texte()->kirbytext()?>
			</div>
		<?php endforeach; ?>
		<?php if($articles->pagination()->hasPages()): ?>

			<nav class="pagination small-16 medium-12">
				<ul>

			    <?php if($pagination->hasPrevPage()): ?>
			    <li><a href="<?php echo $pagination->prevPageURL() ?>">←</a></li>
			    <?php else: ?>
			    <!-- <li><span>←</span></li> -->
			    <?php endif ?>

			    <?php foreach($pagination->range(10) as $r): ?>
			    <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?php echo $pagination->pageURL($r) ?>"><?php echo $r ?></a></li>
			    <?php endforeach ?>


			    <?php if($pagination->hasNextPage()): ?>
			    <li class="last"><a href="<?php echo $pagination->nextPageURL() ?>">→</a></li>
			    <?php else: ?>
			    <!-- <li class="last"><span>→</span></li> -->
			    <?php endif ?>

			  </ul>

			</nav>
		<?php endif ?>
	</div>
	
</main>
<?php snippet('trame') ?>
<div class="blur"></div>

<?php snippet('footer') ?>
