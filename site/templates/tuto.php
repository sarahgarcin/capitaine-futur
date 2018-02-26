<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">

	<div class="page-title medium-push-4 medium-14 xlarge-push-10">
			<h1><?php echo $page->title()->html()?></h1>
	</div>
	<div class="row">
		<div class="page-text small-18 medium-12 medium-push-4 large-12 xlarge-push-10 columns end <?php if($page->uid() == 'le-personnage'):?>capitaine-futur<?php endif ?>">
			<h2>Synopsis</h2>
			<?php echo $page->synopsis()->kt()?>
			<?php if($page->objectives()->isNotEmpty()):?>
				<h2>Objectifs</h2>
				<?php echo $page->objectives()->kt()?>
			<?php endif ?>
			<!-- COÛT -->
			<?php if($page->cost()->isNotEmpty()):?>
				<h2>Coût</h2>
				<p><?php echo $page->cost()->html()?></p>
			<?php endif ?>
			<!-- DUREE -->
			<?php if($page->length()->isNotEmpty()):?>
				<h2>Durée</h2>
				<p><?php echo $page->length()->html()?></p>
			<?php endif ?>
			<!-- MATERIEL -->
			<?php if($page->ingredients()->isNotEmpty()):?>
				<h2>Matériel</h2>
				<ul>
					<?php foreach($page->ingredients()->toStructure() as $ing): ?>
						<li>
							<?php echo $ing->text()->kt()?>
							<?php if($ing->pic()->isNotEmpty()):
								$thumb = $ing->pic()->toFile();?>
								<figure class="page-thumbnail">
									<div class="image-wrapper">
										<?php echo thumb($thumb);?>
									</div>
								</figure>
							<?php endif ?>
						</li>
					<?php endforeach?>
				</ul>
			<?php endif ?>
			<!-- OUTILS -->
			<?php if($page->tools()->isNotEmpty()):?>
				<h2>Outils</h2>
				<ul>
					<?php foreach($page->tools()->toStructure() as $ing): ?>
						<li>
							<?php echo $ing->text()->kt()?>
							<?php if($ing->pic()->isNotEmpty()):
								$thumb = $ing->pic()->toFile();?>
								<figure class="page-thumbnail">
									<div class="image-wrapper">
										<?php echo thumb($thumb);?>
									</div>
								</figure>
							<?php endif ?>
						</li>
					<?php endforeach?>
				</ul>
			<?php endif ?>
			<!-- TEXT / ETAPE -->
			<?php echo $page->text()->kt()?>
		</div>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
