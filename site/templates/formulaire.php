<?php snippet('header') ?>

 	<main>

 			<?php snippet('comments-form') ?>
 			<?php snippet('comments-list') ?>
 		<div>
 			<a onclick="if(document.referrer.indexOf(window.location.host) !== -1) { history.go(-1); return false; } else { window.location.href = '<?php echo $site->url()?>'; }" title="<?php echo $site->title()?>">
				<
			</a>
 		</div>
		<div class="small-16 small-push-1 medium-8 medium-push-5">
			<h2>Candidater</h2>

		</div>
		</section>

 	</main>

<?php snippet('footer') ?>