<section class="et-slide about" id="tab-about">
  <div class="contenteiner">
    <h1><?= $data->title()->tohtml() ?></h1>
    <p class="about__content">
      <?= $data->intro()->html(); ?>
    </p>

    <h2 class="eu__title"><?= $data->eutitle()->tohtml() ?></h2>

    <div class="project__tiles">
        <div class="tile tile-centered">
          <div class="tile-icon">
              <?php snippet('title') ?>
          </div>
          <div class="tile-content">
            <div class="tile-title text-justify">Naziv projekta</div>
            <div class="tile-subtitle text-gray text-justify"><?= $data->project_stat_first()->tohtml() ?></div>
          </div>
          <div class="tile-action">
            <button class="btn btn-link">
              <i class="icon icon-more-vert"></i>
            </button>
          </div>
        </div><!-- tile first -->

        <div class="tile tile-centered">
          <div class="tile-icon">
              <?php snippet('money') ?>
          </div>
          <div class="tile-content">
            <div class="tile-title text-justify">Ukupna vrijednost projekta</div>
            <div class="tile-subtitle text-gray text-justify"><?= $data->project_stat_second()->tohtml() ?></div>
          </div>
          <div class="tile-action">
            <button class="btn btn-link">
              <i class="icon icon-more-vert"></i>
            </button>
          </div>
        </div><!-- tile second -->

        <div class="tile tile-centered">
          <div class="tile-icon">
              <?php snippet('money') ?>
          </div>
          <div class="tile-content">
            <div class="tile-title text-justify">Iznos sufinanciranja</div>
            <div class="tile-subtitle text-gray text-justify"><?= $data->project_stat_third()->tohtml() ?></div>
          </div>
          <div class="tile-action">
            <button class="btn btn-link">
              <i class="icon icon-more-vert"></i>
            </button>
          </div>
        </div><!-- tile third -->
    </div>
    <?php if ($image = $site->image('eulogo.png')) : ?>
      <div class="eu__img">
        <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?= $data->eutitle()->tohtml() ?>">
      </div>
    <?php endif ?>
    <div class="project__description text-justify text-break">
      <?= $data->project_description()->kirbytext() ?>
    </div>
  </div>
  
</section><!-- about -->
