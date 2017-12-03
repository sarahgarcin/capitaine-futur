<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<h1>
			<a href="<?php echo $page->parent()->url()?>" title="<?php echo $page->parent()->title()?>">
				<?php echo $page->parent()->title()->html()?>
			</a>
			
		</h1>
	</div>
	<div class="row">
		<div class="page-author small-18 medium-4 medium-push-1 large-6 large-push-4 columns">
			<?php echo $page->parent()->authors()->kirbytext()?>
		</div>
		<div class="page-text small-18 medium-12 medium-push-1 large-12 large-push-1 columns end">
			<?php echo $page->parent()->description()->kirbytext()?>
		</div>
	</div>
	<div class="section-content">
		<div class="section-title medium-push-4">
			<h1><?php echo $page->title()->html()?></h1>
		</div>
		<?php foreach($page->children()->flip() as $article):?>
			<div class="section-article page-text small-18 medium-12 medium-push-5 large-12 large-push-6">
				<h2><?php echo $article->title()->html()?></h2>
				<h3 class="dates"><?php echo $article->modified('d/m/Y');?></h3>
				<?php echo $article->texte()->kirbytext()?>
			</div>
		<?php endforeach; ?>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
