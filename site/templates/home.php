<?php snippet('header') ?>
<main class="et-main">
  <div class="off-canvas" style="margin-bottomm: 15rem;">
  <!-- off-screen toggle button -->
  

  <div id="sidebar-id" class="off-canvas-sidebar">
    <!-- off-screen sidebar -->
    <a class="logo" href="<?= url() ?>" rel="home" title="<?php echo $site->title() ?>">
      <?php if ($image = $site->image('logomini.jpg')) : ?>
        <img src="<?php echo $image->url() ?>" alt="<?php echo $site->title() ?>">
      <?php endif ?>
    </a>
    <ul class="nav">
      <li class="nav-item header__scroll">
        <a href="#" data-scroll="tab-about">O nama</a>
      </li>
      <li class="nav-item header__scroll" data-scroll="tab-services">
        <a href="#">Djelatnosti</a>
      </li>
      <li class="nav-item header__scroll" data-scroll="tab-contact">
        <a href="#">Kontaktirajte nas</a>
      </li>
    </ul>
  </div>

  <a class="off-canvas-overlay" href="#close"></a>

  <div class="off-canvas-content">
    <!-- off-screen content -->
    <?php
    foreach ($pages->visible() as $section) {
      snippet($section->uid(), array('data' => $section, 'form' => $form));
    } ?>
  </div>
  

</div>
</main>

<?php snippet('footer') ?>
