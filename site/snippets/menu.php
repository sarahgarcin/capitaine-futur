<header id="header" class="fixed">

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	    	<!-- <a href="<?php e($page->template() != 'home', $site->url(), '#')?>"> -->
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
	    	<?php foreach($pages->visible() as $page):?>
	    		<?php if($page->uid() != 'contact'):?>
		      	<li class="menu-el">
		      		<a <?php e($page->isOpen(), ' class="active"') ?> href="#<?php echo $page->uid()?>" title="<?php echo $page->uid()?>">
								<?php echo $page->title()->html()?>
							</a>
						</li>
					<?php endif ?>
	    	<?php endforeach ?>

	    </ul>
	   <?php if($site->socialnetworks()->isNotEmpty()): ?>
				<div class="social-network left">
					<ul>
					<?php foreach($site->socialnetworks()->toStructure() as $socialnetwork): ?>
						<li>
							<a href="<?php echo $socialnetwork->link() ?>" itemprop="url">
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
			    <li<?php e($site->language() == $language, ' class="active"') ?>>
			      <a href="<?php echo $site->url($language->code()) ?>">
			        <?php echo html($language->name()) ?>
			      </a>
			    </li>
			    <?php endforeach ?>
			  </ul>
			  <ul class="infos-menu">
			  	<li class="menu-el">
					  <a <?php e($page->isOpen(), ' class="active"') ?> href="#<?php echo $pages->find('contact')?>" title="<?php echo $pages->find('contact')?>">
							<?php echo $pages->find('contact')->title()->html()?>
						</a>
					</li>
				</ul>
			</div>
	  </section>
	</nav>
<!-- 	<div id="bar"></div>
	 -->
</header><!-- /header -->