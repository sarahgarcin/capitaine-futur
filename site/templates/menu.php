<?php snippet('header') ?>
<?php snippet('breadcrumb') ?>
<main class="wrap">
	<div class="page-title medium-push-4 medium-14">
		<?php if($page->parent()->intendedTemplate() == "gn3t"):?>
			<h1><?php echo $page->parent()->title()->html()?></h1>
		<?php else: ?>
			<h1><?php echo $page->title()->html()?></h1>
		<?php endif;?>
	</div>
	<div class="small-push-1 medium-push-4">
		<ul class="submenu">
			<?php foreach($page->children()->visible() as $submenu):?>
				<li>
					<a href="<?php if($submenu->intendedTemplate() == 'gn3t'):echo $submenu->children()->first()->url(); else:echo $submenu->url(); endif;?>" title="<?php echo $submenu->title()?>">
						<span class="sub-title">
							<?php echo $submenu->title()->html();?>
						</span>
						<span class="sub-des">
							<?php if($submenu->intendedTemplate() == 'blog'):
								echo $submenu->authors()->html();
							elseif($submenu->intendedTemplate() == 'voyage'):
								echo $submenu->subtitle()->html();
							else:
								echo $submenu->description()->html();
							endif;?>
						</span>
					</a>
				</li>
			<?php endforeach?>
		</ul>
	</div>
	<?php snippet('trame') ?>
</main>
<div class="blur"></div>

<?php snippet('footer') ?>
