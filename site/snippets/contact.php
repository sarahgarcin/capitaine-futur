<section id="<?php echo $data->uid()?>" class="textCartel">
	<div class="inner-content small-18 small-push-1 medium-6 medium-push-10" 
	data-top="top: -100%;" 
	data--30000-bottom="top: -90%;" 
	data--45000-bottom="top: 12%;"
	data--50000-bottom="top: 12%;"
	data--60000-bottom="top: -100%;"  
	data-anchor-target="#slide-6">
		<h2><?php echo $data->subtitle()->html() ?></h2>
	  <div class="text-wrapper small-16 small-push-2">
	  	<?php echo $data->text()->kirbytext() ?>	
	  </div>
	</div>

</section>

<section id="<?php echo $page->uid()?>-appel" class="formes">
	<div class="inner-content" 
	data-top="top: 100%; left: 30%;" 
	data--45000-bottom="top: 90%; left: 30%;" 
	data--50000-bottom="top: 50%; left: 30%;"
	data--55000-bottom="top: 50%; left: 30%;"
	data--60000-bottom="top: 100%; left: 30%;"  
	data-anchor-target="#slide-6">
	<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		 width="331.334px" height="117.522px" viewBox="498.558 206.673 331.334 117.522"
		 enable-background="new 498.558 206.673 331.334 117.522" xml:space="preserve">
	<polygon fill="#007C12" points="597.634,206.673 498.671,227.917 498.671,276.779 514.073,323.516 632.199,323.516 660.581,323.516 
		758.382,310.769 829.892,265.094 824.239,217.881 715.717,206.673 "/>
	</svg>
	<?php echo $data->contact()->kirbytext() ?>
	</div>
</section>
