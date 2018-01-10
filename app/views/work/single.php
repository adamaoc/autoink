<?php $post = $data['post']; ?>

<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>
<?php 
// Header
// title | Sub title | photo | Color | 
?>
<?php getComponent("pageheader", $data['pageheader']); ?>
<article class="container">
	<div class="meta">
		Published on <?= $post['pubdate'] ?> | 
		visit <a href="http://<?= $post['category'] ?>" target="_blank"><?= $post['category'] ?></a>
	</div>
	<div class="post">
		<?= $post['content'] ?>
	</div>

	<div class="tags-wrap">
		<?php //getComponent("tag_list", $post['tagsarr']); ?>
	</div>
	<p>
		<a href="/work/" class="btn">&laquo; back to work list</a>
	</p>
</article>
<?php getFooter($data['footerdata']); ?>
