<header id="header" class="fixed">

	<nav class="top-bar" data-topbar role="navigation">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="<?php echo $site->url() ?>"><?php echo $site->title()->html()?></a></h1>
	    	
	    </li>
	     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
	    <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
	  </ul>

	  <section class="top-bar-section menu">
	    <!-- Left Nav Section -->
	    <ul class="left">
	    	<?php foreach($pages->visible() as $page):?>
	      	<li><a <?php e($page->isOpen(), ' class="active"') ?> href="#<?php echo $page->uid()?>" title="<?php echo $page->uid()?>">
							<?php echo $page->title()->html()?>
						</a></li>
	    	<?php endforeach ?>

	    </ul>
		  <ul class="languages right">
		    <?php foreach($site->languages() as $language): ?>
		    <li<?php e($site->language() == $language, ' class="active"') ?>>
		      <a href="<?php echo $page->url($language->code()) ?>">
		        <?php echo html($language->name()) ?>
		      </a>
		    </li>
		    <?php endforeach ?>
		  </ul>
	  </section>
	</nav>
	
</header><!-- /header -->