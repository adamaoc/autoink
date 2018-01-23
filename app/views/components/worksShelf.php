<div class="shelf__btn__wrap">
  <button class="shelf__btn" id="shelfBtn">Works</button>
</div>

<div class="shelf__wrap" id="shelf" style="display:none;">
  <div class="shelf__content" id="shelfContent">
    <div class="shelf__content__title">
      <h3>Our Work</h3>
    </div>
    <div class="shelf__content__body">
      <?php getComponent("workslist", $data); ?>
    </div>
    <div class="shelf__content__footer">
      <button id="shelfClose">Close</button>
    </div>
  </div>
</div>
