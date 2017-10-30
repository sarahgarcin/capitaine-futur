<header id="header">
	<div class="title siteName">
		<a href="<?php echo $site->url()?>" alt="<?php echo $site->title()?>">
		  <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
		</a>
		<h1><?php echo $site->title()->html()?></h1>
		
	</div>
	<nav class="navigation" role="navigation">
		<ul>
			<?php foreach($pages->visible() as $menu):?>
				<li>
					<a <?php e($menu->isOpen(), ' class="active"') ?> href="#" title="<?php echo $menu->title()?>">
						<?php echo $menu->title()->html();?>
					</a>
					<ul class="submenu">
						<?php foreach($menu->children()->visible() as $submenu):?>
							<li>
								<a <?php e($submenu->isOpen(), ' class="active"') ?> href="<?php echo $submenu->url()?>" title="<?php echo $submenu->title()?>">
									<?php echo $submenu->title()->html();?>
								</a>
								<span><?php echo $submenu->description()->html()?></span>
							</li>
						<?php endforeach?>
					</ul>
				</li>
			<?php endforeach ?>
		</ul>
	</nav>

	<ul class="menu-secondaire">
		<li class="languages">
	    <?php foreach($site->languages() as $language): ?>
	    <span<?php e($site->language() == $language, ' class="active"') ?>?>
	      <a href="<?php echo $page->url($language->code()) ?>">
	       <?php echo html($language->name()) ?>
	      </a>
	    </span>
	    <?php endforeach ?>
		</li>
		<li><a href="<?php echo $pages->find('contact')->url()?>" title="<?php echo $pages->find('contact')->title()?>"><?php echo $pages->find('contact')->title()->html()?></a></li>
		<li><a href="http://eepurl.com/cS1QX9" title="suscribe newsletter" target='_blank'>Newsletter</a></li>
		
	</ul>

  <?php if($site->socialnetworks()->isNotEmpty()): ?>
		<ul class="social-network">
			<?php foreach($site->socialnetworks()->toStructure() as $socialnetwork): ?>
				<li>
					<a href="<?php echo $socialnetwork->link() ?>" itemprop="url" target="_blank">
						<i class="fa <?php echo $socialnetwork->icon()->html() ?>" aria-hidden="true"></i>
			    </a>
				</li>
			<?php endforeach ?>
		</ul>
	<?php endif ?>

	
</header><!-- /header -->