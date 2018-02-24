

<section class="et-slide services" id="tab-services">
  <h1><?= $data->title()->tohtml() ?></h1>
  <div class="contenteiner services__container">
    <div class="columns col-gapless">
      <?php foreach ($data->children()->visible() as $service) : ?>
        <div class="col-3 service">
          <div class="service__border">
            <div class="service__icon" data-scroll="<?= $service->dirname() ?>" style="background-image: url(<?= $service->coverimage()->toFile()->url() ?>)">

            </div>
            
          </div>
          <h5 class="service__title">
            <?= $service->title()->tohtml() ?>
          </h5>
        </div>
      <?php endforeach ?>
    </div>

    <div class="services__details">
      <?php foreach ($data->children()->visible() as $service) : ?>
        <div class="details__item columns" id="<?= $service->dirname() ?>">
          <div class="col-5 details__image">
            <div class="image" style="background-image:url(<?php echo thumb($service->coverimage()->toFile(), array('width' => 480, 'height' => 300))->url() ?>)"></div>
          </div><!-- details image -->

          <div class="col-7 details__desc">
            <h2 class="desc__title"><?= $service->title()->tohtml() ?></h2>
            <div class="divider text-center" data-content="DETALJI"></div>
            <details class="accordion desc__details text-justify" >
              <summary class="accordion-header">
                <i class="icon icon-arrow-right mr-1"></i>
                Reference
              </summary>
              <div class="accordion-body">
                <!-- Accordions content -->
                <?php if ($service->reference()) : ?>
                  <?= $service->reference()->tohtml() ?>
                <?php else : ?>
                  <p class="gallery__info">Trenutno nema opisa.</p>
                <?php endif ?>
              </div>
            </details><!-- accordion -->

            <div class="desc__gallery">
              <?php $pictureSize = sizeof($service->pictures()->yaml()) ?>
              <?php echo($pictureSize) ?>
              <?php foreach ($service->pictures()->yaml() as $picture) : ?>
                  <?php if ($img = $service->image($picture)) : ?>
                  <a class="gallery__item"
                     href="<?= $img->url() ?>"
                      style="background-image:url(<?php echo thumb($img, array('width' => 150, 'height' => 70))->url() ?>)">
                  </a>
                  <?php endif ?>
              <?php endforeach ?>
             
            </div><!-- desc gallery -->

          </div><!-- details desc -->

        </div><!-- details__item -->
      <?php endforeach ?>
    </div>
  </div>
</section>
