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
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 150%;" data-anchor-target="#slide-2">
        </div>
    </section>

    <section id="slide-4" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" data-bottom="top: 100%;" data-anchor-target="#slide-3">
        </div>
    </section>

    <section id="slide-5" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;" 
      	data-bottom="top: 20%;" 
      	data--3000-bottom="top: 30%;"
      	data--45000-bottom="top: 30%;"
      	data--50000-bottom="top: 100%;" 
      	data-anchor-target="#slide-5">
        </div>
    </section>

    <section id="slide-6" class="homeSlide">
      	<div class="bcg" data-top="top: 0%;">
        </div>
    </section>

    <section id="<?php echo $page->uid()?>" class="textCartel">
			<div class="inner-content small-16 small-push-1 medium-6 medium-push-10" 
			data-top="top: 12%; left:100%;"
			data--100-top="top: 12%; left:90%;"  
			data-bottom="top: 12%; left:50%" 
			data-anchor-target="#slide-1"
			data--500-bottom="top:12%; left:50%"
			data--1500-bottom="top:12%; left:100%;"
			>
				<?php echo $page->text()->kirbytext() ?>
			</div>
		</section>

		<section id="<?php echo $page->uid()?>-appel" class="formes">
			<div class="inner-content" 
			data-top="top: 50%; left:0%;"
			data--100-top="top: 50%; left:10%;" 
			data-bottom="top: 50%; left:35%;" 
			data--500-bottom="top: 50%; left:35%;"
			data--1500-bottom="top: 50%; left:-100%;"
			data-anchor-target="#slide-1">
				<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="155px" height="148.394px" viewBox="0 0 155 148.394" enable-background="new 0 0 155 148.394" xml:space="preserve">
				<polygon fill="#007C12" points="26.935,0 0,69.114 0,112.819 27.952,137.213 39.132,141.278 94.016,148.394 141.787,119.934 
					155,81.31 122.136,31.508 86.902,6.097 "/>
				</svg>
				<a href="<?php echo $pages->find('appel-a-projets')->url()?>" title="<?php echo $pages->find('appel-a-projets')->title()?>">
					<?php echo $pages->find('appel-a-projets')->title()?>
				</a>
			</div>
		</section>

		<?php snippet('animations') ?>


		<?php foreach($pages->visible() as $section) {
		  snippet($section->uid(), array('data' => $section));
		}?>


</main>


<?php snippet('footer') ?>