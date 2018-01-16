
  <footer>

    <p style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);border:0;">
      <a href="http://g-u-i.net/">Made by Julien Gargot from <em>g.u.i.</em></a> and <a href="http://www.louiseveillard.com">Louis Eveillard</a>.
    </p>

  </footer>

  <!-- scripts -->
  <?php if ( c::get('environment') == 'local' ) : ?>

  <?= js('assets/js/plugins.js') ?>
  <?= js('bower_components/vis/dist/vis.min.js')?>
  <?= js('assets/js/libs/photoswipe.min.js')?>
  <?= js('assets/js/libs/photoswipe-ui-default.min.js')?>
  <?= js('assets/js/main.js') ?>

  <?php else: ?>

  <?= js('assets/production/all.min.js') ?>

  <?php endif ?>
  <!-- init photoswipe -->
  <?= \ka\kirby\PhotoSwipe::init(); ?>
</body>
</html>
