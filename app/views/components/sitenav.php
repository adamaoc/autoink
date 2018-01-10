<span class="nav-toggle">(a)</span>

<nav class="site-nav">
	<span class="nav-off">X</span>
	<ul>
		<?php foreach ($data as $link) : ?>
		<li class="<?= $link['slug'] ?>">
			<a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
				<?= $link['slug'] ?>
			</a>
		</li>
		<?php endforeach; ?>
		<li><a href="http://flexhub.ampnetmedia.com/" class="flexhublink">LogIn <span>(FlexHub)</span></a></li>
	</ul>
</nav>