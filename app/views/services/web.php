<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>

<section class="web">
	<h3 style="text-align: center; margin: 3em 0;">More coming soon...</h3>

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
      </div>
    </div>
    <div class="homepage__section__image homepage__section__image--web"></div>
  </div>
</section>

<?php getFooter($data['footerdata']); ?>
