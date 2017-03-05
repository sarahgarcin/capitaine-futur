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
	      	<li><a <?php e($page->isOpen(), ' class="active"') ?> href="<?php echo $page->url()?>" title="<?php echo $page->uid()?>">
							<?php echo $page->title()->html()?>
						</a></li>
	    	<?php endforeach ?>
	    	<li class="night-mode">◼</li>
	    </ul>
	  </section>
	</nav>
	
</header><!-- /header -->