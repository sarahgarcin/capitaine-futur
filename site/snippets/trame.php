<?php
$files = array();
// http://php.net/manual/de/class.directoryiterator.php
$iterator = new \DirectoryIterator(kirby()->roots()->assets() . '/images/trame');
foreach ($iterator as $file) {
    if($file->isFile()) {
        $files[] = $file->getFilename();
    }
}
if(count($files)) {
  $random = array_rand($files);
  $file = $files[$random];
}
?>

<div class="page-trame">
	<img src="<?php echo $site->url()?>/assets/images/trame/<?php echo $file ?>" alt="">
</div>