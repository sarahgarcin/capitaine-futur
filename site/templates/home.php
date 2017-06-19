<?php snippet('header') ?>
<?php snippet('menu') ?>

 	<div id="preloader">
 		<img src="assets/images/plan-5.jpg" alt="">
 		<img src="assets/images/plan-4.png" alt="">
 		<img src="assets/images/plan-3.png" alt="">
 		<img src="assets/images/plan-2.png" alt="">
 		<img src="assets/images/plan-1-droite.png" alt="">
 		<img src="assets/images/plan-1-gauche.png" alt="">
 	</div>

  <div class="loading">
    <div class="image-wrapper">
      <img src="<?php echo $site->url()?>/assets/images/loading.gif" alt="loading">
    </div>
  </div>

 	<main class="main-wrapper">
    <section id="slide-1" class="homeSlide">
      <div class="bcg" 
      data-top="left: 0%;" 
      data--3000-bottom="left: -40%;">
       </div>
    </section>

	    
    <section id="slide-2" class="homeSlide">
      	<div class="bcg" 
        data-top="left: 0%;" 
        data--3000-bottom="left: 40%;">
        </div>
    </section>

	    
    <section id="slide-3" class="homeSlide">
      	<div class="bcg" 
        data-top="top: 100%;" 
        data-bottom="top: 100%;"
        data--13000-bottom="top: 100%;"
        data--14000-bottom="top: 0%;" 
        data--16000-bottom="top: 0%;"  
        data--17000-bottom="top: 100%;" >
        </div>
    </section>

    <section id="slide-4" class="homeSlide">
      	<div class="bcg" 
        data-top="top: 100%;" 
        data--3000-bottom="top: 100%;"
        data--4000-bottom="top: 0%;"
        data--7000-bottom="top: 0%;"
        data--8000-bottom="top: 100%;">
        </div>
    </section>

    <section id="slide-5" class="homeSlide">
      	<div class="bcg" data-top="top: 100%;" 
      	data-bottom="top: 100%;" 
      	data--21000-bottom="top: 100%;"
      	data--22500-bottom="top: 10%;"
      	data--25500-bottom="top: 10%;" 
        data--26500-bottom="top: 100%;" >
        </div>
    </section>

    <section id="slide-6" class="homeSlide">
      	<div class="bcg small-18"
        data-top="width:100%; height:100%; left:0%;" 
        data--3000-bottom="width:170%; height:170%; left:0%;"
        data--8000-bottom="width:170%; height:170%; left:0%;"
        data--10000-bottom="width:170%; height:170%; left:-65%;"
        data--12000-bottom="width:170%; height:170%; left:-65%;"
        data--13000-bottom="width:130%; height:130%; left:-25%;"
        data--17000-bottom="width:130%; height:130%; left:-25%;"
        data--18000-bottom="width:100%; height:100%; left:0%;">
        </div>
    </section>

		<?php snippet('animations') ?>

    <!-- home page -->
    <section id="<?php echo $page->uid()?>" class="text-home">
      <div class="inner-content small-16 small-push-1 medium-12 medium-push-3 large-10 large-push-4 xlarge-18 xlarge-push-0" 
      data-top="opacity:1; display:block;" 
      data-bottom="opacity:1; display:block;" 
      data--1000-bottom="opacity:1; display:block;"
      data--2000-bottom="opacity:0; display:none;">
        <div class="title small-18 medium-18 large-14 xlarge-18">
          <img src="<?php echo $site->logo()->toFile()->url()?>" alt="<?php echo $site->logo()->title()?>">
        </div>
        <h2 class="small-16 small-push-1 medium-16 medium-push-1 large-12 large-push-3">
          <?php echo $site->slogan()->html() ?>
        </h2>

        <div class="formes">
          <div class="teaser-button">
            <?php echo l::get('video') ?>
          </div>
        </div>
      
      </div>
    </section>

    <div class="teaser">
      <div class="teaser-background">
      </div>
      <div class="close-button">
        <span>x</span>
      </div>
      <div class="teaser-wrapper">
        <?php echo $site->teaser()->kirbytext() ?>
      </div>
    </div>



    <!-- get all sections -->
		<?php foreach($pages->visible() as $section) {
		  snippet($section->uid(), array('data' => $section));
		}?>

</main>


<?php snippet('footer') ?>