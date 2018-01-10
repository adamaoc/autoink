<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<section class="social">
	<h3 style="text-align: center; margin: 3em 0;">More coming soon...</h3>

  <div class="homepage__dark-section">
    <h2>Social Media</h2>
    <p class="type-large" style="text-align: center;">Your competition is getting the best of you. If you're not utilizing social media for your benifit you're missing out!</p>
    <div class="homepage__section">
      <div class="homepage__section__details">
        <div class="homepage__section__details-wrap homepage__section__details-wrap--left">
          <h4>Reaching Your Audince</h4>
          <p>It's not just enough to have an account on a social platform here or there, you really need a strategy for reaching your audince. We can help build that audince and give advice on how to better run your account for the future.</p>
          <h4>Engaging Content</h4>
          <p>To keep the attention of your audince on social media you need to produce engaging content. Whether this be videos, photos, or a well crafted message you need a plan of attack to be noticed and grow.</p>
        </div>
      </div>
      <div class="homepage__section__image homepage__section__image--social"></div>
    </div>
  </div>
</section>

<?php getFooter($data['footerdata']); ?>
