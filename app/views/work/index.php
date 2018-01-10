<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<section class="work-list-page">

	<div class="container">
		<?php getComponent("workslist", $data['list']); ?>
		<?php getComponent("pagination", array($data['prevpage'], $data['nextpage'], 'work', $data['maxpagecount'])); ?>
	</div>

</section>

<?php getFooter($data['footerdata']); ?>