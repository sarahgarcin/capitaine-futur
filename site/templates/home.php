<?php snippet('header') ?>
	
<main class="small-18">
	<div class="home-illustration">
		<img src="<?php echo $site->url()?>/assets/images/illu-jour-crop-sans-tete.png" alt="Les voyages de Capitaine Futur">
	</div>
	<div class="wrap small-18">
		<div class="title small-16 medium-14 large-12 xlarge-16">
		  <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
		</div>
		<h2 class="small-16 small-push-1 medium-16 medium-push-1 large-12 large-push-3">
		  <?php echo $site->slogan()->html() ?>
		</h2>
	</div>
	<div class="description medium-push-5 medium-8">
		<h3><?php echo $page->description()->html()?></h3>
		<a href="<?php echo $site->index()->findBy('uid','quoi')->url()?> " title="">En savoir plus</a>
	</div>
	<div class="news medium-push-3 medium-12">
		<ul class="row">
			<h2>Actualités</h2>
				<?php $news = getAllNews($site, $pages); ?>
				<?php foreach($page->actualites()->split(',') as $actualite): ?>
					<?php if($pages->find($news[$actualite])):?>
						<li class="small-16 medium-6 columns end">
							<a href="<?php echo $pages->find($news[$actualite])->url() ?>" title="<?php echo $pages->find($news[$actualite])->title()?>">
								<?php $formatedTitle = str_replace( "<br>", "", $pages->find($news[$actualite])->title()->html()); 
									$thumb = $pages->find($news[$actualite])->thumbnail()->toFile();

								?>
								<?php if($thumb):?>
									<div class="image-wrapper">
										<img src="<?php echo $thumb->crop(640,480)->url()?>" alt="<?php echo $pages->find($news[$actualite])->title()?>">
									</div>
								<?php endif; ?>
								<h3><?php echo $formatedTitle ?></h3>
								<p><?php echo $pages->find($news[$actualite])->text()->excerpt(150)?></p>
							</a>
						</li>
					<?php endif;?>
				<?php endforeach ?>
				
			</ul>
		</div>
</main>

<?php snippet('footer') ?>


<?php function getAllNews($site, $pages){
		$allPages = $site->index();
		$news = array();
		foreach($allPages as $key => $page):
	    if($page->actu() == 'oui'):
	    	$news[] = $page;
	    endif; 
	  endforeach;
	  return $news;
	}
?>