<section class="et-slide stats" id="tab-stats">
  <div id="js-parallax-window" class="parallax-window">
  <div class="parallax-static-content columns stats__items">
    <div class="column stats__item" id="stat_first">
      <div class="item__icon"><?= snippet('ship') ?></div>
      <div class="item__title">Preplovljenih milja</div>
      <div class="item__count">
        <?= $data->factfirst()->tohtml() ?>
      </div>
    </div><<!-- item first -->
    <div class="column stats__item" id="stat_second">
      <div class="item__icon"><?= snippet('drone') ?></div>
      <div class="item__title">Sati letenja</div>
      <div class="item__count"><?= $data->factsecond()->tohtml() ?></div>
    </div><!-- item second -->
    <div class="column stats__item" id="stat_third">
      <div class="item__icon"><?= snippet('measure') ?></div>
      <div class="item__title">Premjereno zemlje</div>
      <div class="item__count"><?= $data->factthird()->tohtml() ?></div>
    </div><!-- item third -->
    <div class="column stats__item" id="stat_fourth">
      <div class="item__icon"><?= snippet('building') ?></div>
      <div class="item__title">Završenih gradilišta</div>
      <div class="item__count"><?= $data->factfourth()->tohtml() ?></div>
    </div><!-- item fourth -->
    
  </div>
  <div id="js-parallax-background" class="parallax-background" style="background-image: url(<?= $site->image('stats.jpg')->url() ?>)"></div>
</div>
</section><!-- testimonials -->
