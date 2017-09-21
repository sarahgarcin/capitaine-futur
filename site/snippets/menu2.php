<header id="header" class="fixed">

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	    	<a href="<?php echo $site->url()?>" alt="<?php echo $site->title()?>">
	    		<img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
	    	</a>
	      <h1><?php echo $site->title()->html()?></h1>
	    	
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	  </ul>

	  <section class="top-bar-section menu">
	    <!-- Left Nav Section -->
	    <ul class="left">
	    	<?php foreach($pages->visible() as $element):?>
	    		
		      	<li class="menu-el">
		      		<?php if($page->template() != 'default'):?>
			      		<a <?php e($element->isOpen(), ' class="active"') ?> href="#<?php echo $element->uid()?>" title="<?php echo $element->uid()?>" data-id="<?php echo $element->uid()?>">
									<?php echo $element->title()->html()?>
								</a>
							<?php else: ?>
								<a href="<?php echo $site->url()?>#<?php echo $element->uid()?>" title="<?php echo $element->uid()?>">
									<?php echo $element->title()->html()?>
								</a>
							<?php endif; ?>
						</li>
	    	<?php endforeach ?>

	    </ul>
	   <?php if($site->socialnetworks()->isNotEmpty()): ?>
				<div class="social-network left">
					<ul>
					<?php foreach($site->socialnetworks()->toStructure() as $socialnetwork): ?>
						<li>
							<a href="<?php echo $socialnetwork->link() ?>" itemprop="url" target="_blank">
								<i class="fa <?php echo $socialnetwork->icon()->html() ?>" aria-hidden="true"></i>
					    </a>
						</li>
					<?php endforeach ?>
					</ul>
				</div>
			<?php endif ?>
			<div class="newsletter left">
				<a href="http://eepurl.com/cS1QX9" title="suscribe newsletter" target='_blank'>Newsletter</a>
			</div>
	    <div class="right">
			  <ul class="languages">
			    <?php foreach($site->languages() as $language): ?>
			    <li<?php e($site->language() == $language, ' class="active"') ?> data-language=<?php echo $site->url($language->code())?> >
			        <?php echo html($language->name()) ?>
			    </li>
			    <?php endforeach ?>
			  </ul>
			  <ul class="infos-menu">
			  	<li class="menu-el">
			  		
					</li>
				</ul>
			</div>
	  </section>
	</nav>

</header><!-- /header -->