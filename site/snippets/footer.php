  <footer class="footer" role="contentinfo">
    <div class="footer__btn"></div>
    <div class="footer__outer">
      <div class="footer__inner">
        <div class="footer__center container">
            <div class="columns footer__row">
              <div class="column row__left">
                <div class="columns left__wrapper">
                  <div class="column footer__item">
                    <i class="icon icon-location icon-2x"></i>
                    <div class="footer__info">
                      Sjedište: Mosećka 103 </br>
                      Ured: Gat Sv. Duje 1 </br>
                      21000 Split </br>
                      Hrvatska
                    </div>
                  </div>
                  <div class="column footer__item">
                    <i class="icon icon-mail icon-2x"></i>
                    <div class="footer__info">
                      terestrika@terestrika.hr
                    </div>
                  </div>
                  <div class="column footer__item">
                    <div class="icon icon-people icon-2x"></div>
                    <div class="footer__info">
                      +385 95 586 5041
                    </div>
                  </div>
                </div>
              </div>
              <!--<div class="column row__right">
                <div class="columns right__wrapper">
                  <div class="column footer__item">1 ref</div>
                  <div class="column footer__item">2 ref</div>
                  <div class="column footer__item">3 ref</div>
                </div>
              </div>-->
            </div>
            <div class="bottom__copyright"><?php echo $site->copyright()->kirbytext(); ?></div> 
        </div>
      </div><!-- cont -->
    </div><!--container -->
</footer><!-- footer-->

  
  <?= js('assets/js/dist/bundle.js') ?>
  <?php snippet('ga'); ?>
</body>
</html>
