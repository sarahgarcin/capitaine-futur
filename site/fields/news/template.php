<!-- <input class="[ js-selector-storage ]" type="hidden" name="<?= $field->name() ?>" id="<?= $field->name() ?>"  />
 -->
<div class="field-content">   
  <ul class="input-list field-grid cf">
  <?php

  foreach($field->news() as $new):?>
    <?php if($new->actu() == 'oui'):?>
      <li class="input-list-item field-grid-item field-grid-item-1-2">
        <label class="input input-with-checkbox">
          <input class="checkbox" type="checkbox" value="<?php echo $new->uid()?>" name="<?= $field->name() ?>">
          <span><?= $new->title() ?></span>
        </label>
      </li>
    <?php endif;?>   
  <?php endforeach;?>
  </ul>
</div>

