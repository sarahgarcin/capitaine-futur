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
      <div class="bcg" data-top="left: 0%;" data-bottom="left: -100%;" data-anchor-target="#slide-1">
       </div>
    </section>

	    
    <section id="slide-2" class="homeSlide">
      	<div class="bcg" data-top="left: 0%;" data-bottom="left: 100%;" data-anchor-target="#slide-1">
        </div>
    </section>

	    
    <section id="slide-3" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 50%;"
        data--500-bottom="top: 150%;" data-anchor-target="#slide-2">
        </div>
    </section>

    <section id="slide-4" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 25%;" data--2000-bottom="top: 25%;"data--2500-bottom="top: 100%;" data-anchor-target="#slide-2">
        </div>
    </section>

    <section id="slide-5" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" 
      	data-bottom="top: 20%;" 
      	data--3000-bottom="top: 30%;"
      	data--6000-bottom="top: 30%;"
      	data--7000-bottom="top: 100%;" 
      	data-anchor-target="#slide-3">
        </div>
    </section>

    <section id="slide-6" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;">
        </div>
    </section>

		<?php snippet('animations') ?>


		<?php foreach($pages->visible() as $section) {
		  snippet($section->uid(), array('data' => $section));
		}?>


</main>


<?php snippet('footer') ?>