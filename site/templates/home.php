<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="small-8 small-push-2">
	<?php foreach($pages->visible() as $section) {
	  snippet($section->uid(), array('data' => $section));
	}?>
</main>


<?php snippet('footer') ?>