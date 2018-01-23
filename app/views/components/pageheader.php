<header class="<?= $data['class'] ?>" style="<?= $data['heroimg'] ?>">
	<div class="title-wrap" style="<?= $data['postcolor'] ?>">
    <?php if ($data['innerpage']) : ?>
      <a href="/"><img src="/assets/img/logos/logo-main.png" alt="<?= $data['title'] ?>" /></a>
    <?php else : ?>
      <img src="/assets/img/logos/logo-main.png" alt="<?= $data['title'] ?>" />
    <?php endif; ?>
		<h2><?= $data['title'] ?></h2>
		<h3><?= $data['subtitle'] ?></h3>
	</div>
</header>
