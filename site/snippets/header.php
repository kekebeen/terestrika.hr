<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">
  

  <?= css('assets/css/style.css') ?>

</head>
<body>

  <?php 
  $image = $page->heroimage()->toFile();
  ?>

  <div class="above-fold et-hero-tabs hero">
		<div class="hero-section" id="hero__image">
      <img src="<?= $image->url(); ?>" />
    </div>
    <div class="hero-content">
      <h1 id="hero__big"><?= $page->introheading()->html() ?></h1>
      <h3 id="hero__small"><?= $page->introsubheading()->html() ?></h3>
      <div class="et-hero-tabs-container navbar">
        <div class="navbar-section logo__wrapper">
          <a class="logo" href="<?= url() ?>" rel="home" title="<?php echo $site->title() ?>">
            <?php if ($image = $site->image('logomini.jpg')) : ?>
              <img src="<?php echo $image->url() ?>" alt="<?php echo $site->title() ?>">
            <?php endif ?>
         </a>
        </div>
        <a class="off-canvas-toggle" href="#sidebar-id">
            <div class="hamburger-menu">
                <div class="bar"></div>	
            </div>
        </a>
        <div class="navbar-section navbar-section--right">
          <a class="et-hero-tab header__scroll" href="#tab-about" data-scroll="tab-about">O nama</a>
          <a class="et-hero-tab header__scroll" href="#tab-services" data-scroll="tab-services">Djelatnosti</a>
          <a class="et-hero-tab header__scroll" href="#tab-contact" data-scroll="tab-contact">Kontakt</a>
          <span class="et-hero-tab-slider"></span>
        </div>
        
      </div>
    </div>
</div>
