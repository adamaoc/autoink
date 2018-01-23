<ul class="worklist">
	<?php foreach($data as $post) : ?>
	<li class="workitem">
		<a href="/work/<?= $post['slug'] ?>/" class="worksbox" style="background-image: url(/assets/img/<?= $post['imgthumb'] ?>)">
			<h3><?= $post['title'] ?></h3>
		</a>
	</li>
	<?php endforeach; ?>
</ul>
