<?php snippet('header') ?>
<?php snippet('menu') ?>

 	<div id="preloader">
 		<img src="assets/images/plan-5.png" alt="">
 		<img src="assets/images/plan-4.png" alt="">
 		<img src="assets/images/plan-3.png" alt="">
 		<img src="assets/images/plan-2.png" alt="">
 		<img src="assets/images/plan-1-droite.png" alt="">
 		<img src="assets/images/plan-1-gauche.png" alt="">
 	</div>

 	<main data-anchor-target="#slide-1">
     	 
    <section id="slide-1" class="homeSlide">
      <div class="bcg" data-top="left: 0%;" data-bottom="left: -50%;" data-anchor-target="#slide-1">
       </div>
    </section>

	    
    <section id="slide-2" class="homeSlide">
      	<div class="bcg" data-top="left: 0%;" data-bottom="left: 50%;" data-anchor-target="#slide-1">
        </div>
    </section>

	    
    <section id="slide-3" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 150%;" data-anchor-target="#slide-2">
        </div>
    </section>

    <section id="slide-4" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 100%;" data-anchor-target="#slide-3">
        </div>
    </section>

    <section id="slide-5" class="homeSlide" data-bottom="opacity: 1;" data--10p-bottom="opacity: 1;" data-anchor-target="#slide-5">
      	<div class="bcg" data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-40p-bottom="opacity: 1; width: 500%; height: 450%; top: -48%; left: -48%;" data-anchor-target="#slide-5">
        </div>
    </section>

    <section id="slide-6" class="homeSlide" data-bottom="opacity: 1;" data--10p-bottom="opacity: 1;" data-anchor-target="#slide-6">
      	<div class="bcg" data-top="opacity: 1; width: 100%; height: 100%; top: 0%; left: 0%;" data-40p-bottom="opacity: 1; width: 500%; height: 450%; top: -48%; left: -48%;" data-anchor-target="#slide-6">
        </div>
    </section>

<!-- <div class="illustrations">
	<div class="illustration-wrapper" id="plan5">
		<img src="<?php echo $site->url()?>assets/images/plan-5.png" alt="">
	</div>
	<div class="illustration-wrapper" id="plan4">
		<img src="<?php echo $site->url()?>/assets/images/plan-4.png" alt="">
	</div>
	<div class="illustration-wrapper" id="plan3">
		<img src="<?php echo $site->url()?>/assets/images/plan-3.png" alt="">
	</div>
	<div class="illustration-wrapper" id="plan2">
		<img src="<?php echo $site->url()?>/assets/images/plan-2.png" alt="">
	</div>
	<div class="illustration-wrapper" id="plan1D">
		<img src="<?php echo $site->url()?>/assets/images/plan-1-droite.png" alt="">
	</div>
	<div class="illustration-wrapper" id="plan1G">
		<img src="<?php echo $site->url()?>/assets/images/plan-1-gauche.png" alt="">
	</div>
</div> -->
<main class="small-8 small-push-2">
	<?php foreach($pages->visible() as $section) {
	  snippet($section->uid(), array('data' => $section));
	}?>
</main>


<?php snippet('footer') ?>