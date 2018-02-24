<section class="et-slide contact" id="tab-contact">
      <h1><?= $data->title()->tohtml() ?></h1>
      <div class="contenteiner">
        <form action="<?php echo $page->url() ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo honeypot_field(); ?>

          <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="form-group">
                      <label class="form-label" for="name">Ime</label>
                      <input class="form-input" id="name" name="name" placeholder="Ime" type="text" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="email">Email</label>
                      <input class="form-input" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                    <div class="form-group">
                      <label class="form-label" for="subject">Predmet</label>
                      <input class="form-input" id="subject" name="subject" placeholder="Predmet" type="text" required>
                    </div>
                </div><!-- left column -->

                <div class="divider-vert" data-content="i"></div>
                <div class="column">
                    <div class="form-group">
                      <label class="form-label" for="message">Poruka</label>
                      <textarea class="form-input" id="message" name="message" placeholder="Poruka" rows="5" required></textarea>
                    </div>
                    <div class="form-group form__submit">
                      <input type="submit" name="submit" class="btn btn-lg btn-primary" value="Posalji">
                    </div>
                </div><!-- right column -->
            </div><!-- columns -->
          </div><!-- container -->
        </form><!-- main form -->
        <?php if ($form->success()) : ?>
          <p class="success__msg">Message sent</p>
        <?php else : ?>
          <?php snippet('uniform/errors', ['form' => $form]); ?>
        <?php endif; ?>
      </div><!-- contenteiner -->
    </section><!-- contact section -->
