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
      <div class="bcg" 
      data-top="left: 0;" 
      data-bottom="left: 0%;"
      data--1000-bottom="left: -50%;"
      data--1500-bottom="left: -100%;"
       data-anchor-target="#slide-1">
       </div>
    </section>

	    
    <section id="slide-2" class="homeSlide">
      	<div class="bcg" 
        data-top="left: 0;" 
        data-bottom="left: 0%;"
        data--1000-bottom="left: 50%;"
        data--1500-bottom="left: 100%;"
         data-anchor-target="#slide-1">
        </div>
    </section>

	    
    <section id="slide-3" class="homeSlide">
      	<div class="bcg" 
        data-top="top: -100%;" 
        data-bottom="top: -50%;"
        data--500-bottom="top: 0%;" 
        data--2500-bottom="top: 0%;"  
        data--3000-bottom="top: -100%;"  
        data-anchor-target="#slide-5">
        </div>
    </section>

    <section id="slide-4" class="homeSlide">
      	<div class="bcg" 
        data-top="top: 100%;" 
        data-bottom="top: 100%;" 
        data--1000-bottom="top: 90%;"
        data--2500-bottom="top: 0;" 
        data-anchor-target="#slide-2">
        </div>
    </section>

    <section id="slide-5" class="homeSlide">
      	<div class="bcg" data-top="top: -100%;" 
      	data-bottom="top: -20%;" 
      	data--3000-bottom="top: -30%;"
      	data--6000-bottom="top: -30%;"
      	data--7000-bottom="top: -100%;" 
      	data-anchor-target="#slide-5">
        </div>
    </section>

    <section id="slide-6" class="homeSlide">
      	<div class="bcg small-18"
        data-top="width:100%; height:100%;" 
        data-bottom="width:150%; height:150%;" 
        data--1000-bottom="width:170%; height:170%;"
        data-anchor-target="#slide-2">
        >
        </div>
    </section>

		<?php snippet('animations') ?>

    <!-- home page -->
    <section id="<?php echo $page->uid()?>" class="text-home">
      <div class="inner-content small-16 small-push-1 medium-10 medium-push-4 xlarge-6 xlarge-push-6" 
      data-top="opacity:1; display:block;" 
      data-bottom="opacity:1; display:block;" 
      data--500-bottom="opacity:0; display:block;"
      data--1000-bottom="opacity:0; display:none;"
      data-anchor-target="#slide-1">
        <div class="title">
          <h1><?php echo $site->title()->html() ?></h1>
          <h1 class="overlay"><?php echo $site->title()->html() ?></h1>
        </div>
        <h2 class="medium-12 medium-push-3 large-8 large-push-5 xlarge-10 xlarge-push-4">
          <?php echo $site->slogan()->html() ?>
        </h2>

        <div class="formes">
          <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             width="196.505px" height="151.496px" viewBox="0 0 196.505 151.496" enable-background="new 0 0 196.505 151.496"
             xml:space="preserve">
          <polygon fill="#FFFFFF" points="94.339,0 40,17.496 0,72.029 0,87.496 25.339,125.496 94.339,151.496 149.339,151.496 
            196.505,101.496 196.505,72.029 155.338,19.496 "/>
          </svg>
          <a href="#appel-a-projets" title="<?php echo $pages->find('appel-a-projets')->title()?>">
            appel <br>à<br>projets
          </a>
        </div>

        <div class="invitation-to-scroll">
         <span>↓</span>
        </div>
      
      </div>
    </section>




		<?php foreach($pages->visible() as $section) {
		  snippet($section->uid(), array('data' => $section));
		}?>


</main>


<?php snippet('footer') ?>