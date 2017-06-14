<?php snippet('header') ?>
<?php snippet('menu') ?>

 	<main id="<?php echo $page->uid()?>">
 		<table>
		  <!-- <colgroup span="13"></colgroup> -->
		  <tr>
		    <th><?php echo l::get('name')?></th>
		    <th><?php echo l::get('firstname')?></th>
		    <th><?php echo l::get('birthdate')?></th>
		    <th><?php echo l::get('address1')?></th>
		    <th><?php echo l::get('address2')?></th>
		    <th><?php echo l::get('country')?></th>
		    <th>Email</th>
		    <th><?php echo l::get('phone')?></th>
		    <th><?php echo l::get('links')?></th>
		    <th><?php echo l::get('bio')?></th>
		    <th><?php echo l::get('philosophy')?></th>
		    <th><?php echo l::get('projectTitle')?></th>
		    <th><?php echo l::get('summary')?></th>
		    <th><?php echo l::get('supernaturel')?></th>
		    <th><?php echo l::get('visitors')?></th>
		    <th><?php echo l::get('space')?></th>
		  </tr>
		  <?php foreach($pages->find('formulaire')->children() as $candidat):?>
		  <tr>
		    <td><?php echo $candidat->name() ?></td>
		    <td><?php echo $candidat->firstname() ?></td>
		    <td><?php echo $candidat->birthdate() ?></td>
		    <td><?php echo $candidat->address() ?></td>
		    <td><?php echo $candidat->address2() ?></td>
		     <td><?php echo $candidat->country() ?></td>
		    <td><?php echo $candidat->email() ?></td>
		    <td><?php echo $candidat->phone() ?></td>
		    
		    <td>
		    	<?php $arrayLinks = $candidat->links()->split(','); ?>
		    	<?php foreach($arrayLinks as $link):?>
		    		<a href="<?php echo $link?>" title=""><?php echo $link?></a>
		    	<?php endforeach;?>
		    </td>
		    <td><?php echo $candidat->bio() ?></td>
		    <td><?php echo $candidat->philosophy() ?></td>
		    <td><?php echo $candidat->projectTitle() ?></td>
		    <td><?php echo $candidat->resume() ?></td>
		    <td><?php echo $candidat->supernaturel() ?></td>
		    <td><?php echo $candidat->visitors() ?></td>
		    <td><?php echo $candidat->space() ?></td>
		  </tr>
		 	<?php endforeach ?>
		</table>

 	</main>

<?php snippet('footer') ?>