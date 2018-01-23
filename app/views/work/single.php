<?php $post = $data['post']; ?>

<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>
<?php
// Header
// title | Sub title | photo | Color |
?>
<?php getComponent("pageheader", $data['pageheader']); ?>
<?php getComponent("worksShelf", $data['worklist']); ?>
<article class="container">
	<div class="post">

    <h1><?= $post['title'] ?></h1>

    <?php if ($post['subtitle']) : ?>
      <h2><?= $post['subtitle'] ?></h2>
    <?php endif; ?>

  	<div class="meta">
  		Published on <?= $post['pubdate'] ?> |
  		visit <a href="http://<?= $post['category'] ?>" target="_blank"><?= $post['category'] ?></a>
  	</div>

    <div class="post__content">
  		<?= $post['content'] ?>
    </div>

  	<div class="tags-wrap">
  		<?php getComponent("tag_list", $post['tagsarr']); ?>
  	</div>
	</div>
  <?php getComponent("insagramLink"); ?>
</article>
<?php getFooter($data['footerdata']); ?>

<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#videoWrap").fitVids();
  });
</script>
