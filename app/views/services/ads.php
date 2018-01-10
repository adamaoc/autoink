<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<section class="ads">
	<h3 style="text-align: center; margin: 3em 0;">More coming soon...</h3>

  <div class="homepage__section">
    <div class="homepage__section__image homepage__section__image--ads"></div>
    <div class="homepage__section__details">
      <div class="homepage__section__details-wrap">
        <h2 style="padding-top: 40px;">Web Advertising</h2>
        <p class="type-large">Promoting your business online seems like a simple enough task if you have a large budget but what if you don't? You can be effective and efficient with the right plan.</p>
        <h4>Stunning Ads</h4>
        <p>We can help build and develop visually stunning web ads using HTML5 and animation. Studies show that people are more likely to engage with an animated ad over a static or text-based ad.</p>

        <h4>Video Ads</h4>
        <p>Take it a step further and produce stunning ads for your products or brands to be featured in videos around the web. We help sketch out the plans, shoot and edit the video, and plan the ad delivery.</p>
      </div>
    </div>
  </div>
</section>

<?php getFooter($data['footerdata']); ?>
