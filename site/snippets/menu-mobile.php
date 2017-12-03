<header id="header" class="header-for-mobile">
	<div class="title siteName">
		<a href="<?php echo $site->url()?>" alt="<?php echo $site->title()?>">
		  <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
		</a>
		<h1><?php echo $site->title()->html()?></h1>
		
	</div>
	<div class="icon-mobile-wrapper">
		<a href="#" class="menu-icon hide-for-large-up">&#9776;</a>
	</div>
	<div class="menus-wrapper">

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
									<a <?php e($submenu->isOpen(), ' class="active"') ?> href="<?php if($submenu->intendedTemplate() == 'gn3t'):echo $submenu->children()->first()->url(); else:echo $submenu->url(); endif;?>" title="<?php echo $submenu->title()?>">
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
					</li>
				<?php endforeach ?>
			</ul>
		</nav>
		<ul class="menu-secondaire">
			<li class="languages">
		    <?php foreach($site->languages() as $language): ?>
		    <span<?php e($site->language() == $language, ' class="active"')?>>
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
	</div>

	
</header><!-- /header -->
<div class="page-overlay"></div>