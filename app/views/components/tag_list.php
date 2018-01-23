<?php foreach ($data as $tag) :
	$tag = trim($tag);
  $tag = str_replace(' ', '', $tag);
  $tag = str_replace('-', '', $tag); ?>
	#<?= $tag ?>
<?php endforeach; ?>
