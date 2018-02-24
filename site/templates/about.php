<section class="et-slide about" id="tab-about">
  <div class="contenteiner">
    <h1 class="wow fade__up"><?= $data->title->tohtml() ?></h1>
    <p class="about__content">
      <?= $data->aboutus()->html(); ?>
    </p>
  </div>
  
</section><!-- about -->
