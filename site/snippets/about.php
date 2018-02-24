<section class="et-slide about" id="tab-about">
  <div class="contenteiner">
    <h1><?= $data->title()->tohtml() ?></h1>
    <p class="about__content">
      <?= $data->intro()->html(); ?>
    </p>
  </div>

  <h2 class="eu__title"><?= $data->eutitle()->tohtml() ?></h2>
    <?php if ($image = $site->image('eulogo.jpg')) : ?>
      <div class="eu__img">
        <div class="img__border"></div>
        <img class="img-responsive" src="<?php echo $image->url() ?>" alt="<?= $data->eutitle()->tohtml() ?>">
      </div>
    <?php endif ?>
  
</section><!-- about -->
