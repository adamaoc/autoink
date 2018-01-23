<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<?php getComponent("worksShelf", $data['worklist']); ?>

<?php getComponent("insagramLink"); ?>

<div class="homepage__section">
  <div class="homepage__section__image homepage__section__image--video"></div>
  <div class="homepage__section__details">
    <div class="homepage__section__details-wrap">
      <h2 style="padding-top: 40px;">Pro Web Video</h2>
      <p class="type-large">Every business needs video. Videos inspire us to take action and engage more viewers than any other medium.</p>
      <h4>Brand Building</h4>
      <p>Video is a great way to get your name out and build your brand. What better way to tell your story than actually telling your story along with great visuals of your company? We can make that story come to life like never before!</p>

      <h4>Generate Leads &amp; Engage Viewers</h4>
      <p>Video is a great way to engage viewers but it can also help generate new leads. A promotional video is a great way to get new clients interested in what you, as a company, are doing. Showing off your products or services in a video makes it much easier for potential customers to get a real sense of what it is and how it will help them.</p>

      <h4>Tell Your Story</h4>
      <p>Video is the best way for you to tell your companies or your personal story and helps clients or customers connect with your message on a new level.</p>

      <!-- <a href="/video/">Learn More &raquo;</a> -->
    </div>
  </div>
</div>

<div class="homepage__section bgwrap--light">
  <div class="homepage__section__details">
    <div class="homepage__section__details-wrap homepage__section__details-wrap--left">
      <h2 style="padding-top: 40px;">Web Design/Dev</h2>
      <p class="type-large">Get your business out there. Whether you're a small startup or a larger established business, having a great online presence can make all the difference.</p>
      <h4>Designing a Brand</h4>
      <p>There's more to having a website then throwing content out into the vast web, you need a strategic way to promote your brand and engage your customers.</p>

      <h4>Easy Management</h4>
      <p>There are many ways to manage the content of your website but there are also tradeoffs. Applications like WordPress are great for starting up small businesses online but can be overkill of others. Knowing what's best for you is a major key in designing and building what you need.</p>

      <h4>Tell Your Story</h4>
      <p>A website should do more than just show off your products or services, it should be able to tell your story through custom visuals and hand-crafted content.</p>

      <!-- <a href="/web/">Learn More &raquo;</a> -->
    </div>
  </div>
  <div class="homepage__section__image homepage__section__image--web"></div>
</div>

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

      <!-- <a href="/ads/">Learn More &raquo;</a> -->
    </div>
  </div>
</div>

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

        <!-- <a href="/social/">Learn More &raquo;</a> -->
      </div>
    </div>
    <div class="homepage__section__image homepage__section__image--social"></div>
  </div>
</div>

<div class="home-contact-form">
  <div class="contact-form_wrap">
    <h4>Contact Us</h4>
    <?php getComponent("contactForm"); ?>
  </div>
</div>

<?php getFooter($data['footerdata']); ?>
