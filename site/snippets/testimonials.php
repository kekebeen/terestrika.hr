<section class="et-slide testimonials" id="tab-testimonials">
  <h1><?= $data->title()->tohtml() ?></h1>

  <div class="testimonials__wrapper">
      <div class="columns">
        <div class="column testimonial__item"><?= $data->first()->tohtml() ?></div>
        <div class="column testimonial__item"><?= $data->second()->tohtml() ?></div>
        <div class="column testimonial__item"><?= $data->third()->tohtml() ?></div>
        <div class="column testimonial__item"><?= $data->fourth()->tohtml() ?></div>
        <div class="column testimonial__item"><?= $data->fifth()->tohtml() ?></div>
      </div>
  </div>
  
</section><!-- testimonials -->
