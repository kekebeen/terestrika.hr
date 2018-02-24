<section class="et-slide testimonials" id="tab-testimonials">
  <div class="columns">
    <div class="column testimonial__item"><?= $data->first()->tohtml() ?></div>
    <div class="column testimonial__item"><?= $data->second()->tohtml() ?></div>
    <div class="column testimonial__item"><?= $data->third()->tohtml() ?></div>
    <div class="column testimonial__item"><?= $data->fourth()->tohtml() ?></div>
    <div class="column testimonial__item"><?= $data->fifth()->tohtml() ?></div>
  </div>
</section><!-- testimonials -->
