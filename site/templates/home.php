<?php snippet('header') ?>


<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60" id="home">
  <main>
    <div class="page-loader">
      <div class="loader">Loading...</div>
    </div>
    <?php snippet('navbar') ?>
    <section class="home-section home-parallax home-fade home-full-height bg-dark-60 agency-page-header" <?php if ($page->headerBackground()->isNotEmpty()):?>data-background="<?= $page->headerBackground()->toFile()->url() ?>" <?php endif ?>>
      <div class="titan-caption">
        <div class="caption-content">
          <div class="font-alt titan-title-size-4"><?= $page->headerTitle()->text() ?></div>
            <div class="font-alt mb-30 titan-title-size-2"><?= $page->headerTitle2()->text() ?></div>
          <div class="font-alt mb-40 titan-title-size-3"><?= $page->headerSubtitle()->text() ?> <span class="rotate"><?= $page->headerRotate()->text() ?></span>
          </div><a class="section-scroll btn btn-border-w btn-circle" href="#icons">Saber más</a>
        </div>
      </div>
    </section>
    <div class="main" id="icons">
      <section class="module">
        <div class="container">
          <div class="row multi-columns-row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="<?= $page->icon1Icon()->text() ?>"></span></div>
                <h3 class="features-title font-alt"><?= $page->icon1Title()->text() ?></h3><?= $page->icon1Text()->text() ?>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="<?= $page->icon2Icon()->text() ?>"></span></div>
                <h3 class="features-title font-alt"><?= $page->icon2Title()->text() ?></h3><?= $page->icon2Text()->text() ?>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="features-item">
                <div class="features-icon"><span class="<?= $page->icon3Icon()->text() ?>"></span></div>
                <h3 class="features-title font-alt"><?= $page->icon3Title()->text() ?></h3><?= $page->icon3Text()->text() ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="module pt-0 pb-0" id="about">
        <div class="row position-relative m-0">
          <div class="col-xs-12 col-md-6 side-image" <?php if ($page->aboutImage()->isNotEmpty()):?>data-background="<?= $page->aboutImage()->toFile()->url() ?>" <?php endif ?>></div>
          <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
            <div class="row">
              <div class="col-sm-12">
                <h2 class="module-title font-alt align-left"><?= $page->aboutTitle()->text() ?></h2>
                <div class="module-subtitle font-serif align-left"><?= $page->aboutSubtitle()->text() ?></div>
                <?= $page->aboutText()->kirbytext() ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="module" id="works">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt"><?= $page->servicesTitle()->text() ?></h2>
              <div class="module-subtitle font-serif"></div>
            </div>
          </div>
        </div>
        <div class="container">

          <div class="row multi-columns-row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="content-box">
                <div class="content-box-image"><img <?php if($page->services1Image()->isNotEmpty()): ?>src="<?= $page->services1Image()->toFile()->url() ?>" <?php endif ?>/></div>
                <h3 class="content-box-title font-serif"><?= $page->services1Title()->text() ?></h3><?= $page->services1Text()->text() ?>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="content-box">
                <div class="content-box-image"><img <?php if($page->services2Image()->isNotEmpty()): ?>src="<?= $page->services2Image()->toFile()->url() ?>" <?php endif ?>/></div>
                <h3 class="content-box-title font-serif"><?= $page->services2Title()->text() ?></h3><?= $page->services2Text()->text() ?>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="content-box">
                <div class="content-box-image"><img <?php if($page->services3Image()->isNotEmpty()): ?>src="<?= $page->services3Image()->toFile()->url() ?>" <?php endif ?>/></div>
                <h3 class="content-box-title font-serif"><?= $page->services3Title()->text() ?></h3><?= $page->services3Text()->text() ?>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="content-box">
                <div class="content-box-image"><img <?php if($page->services4Image()->isNotEmpty()): ?>src="<?= $page->services4Image()->toFile()->url() ?>" <?php endif ?>/></div>
                <h3 class="content-box-title font-serif"><?= $page->services4Title()->text() ?></h3><?= $page->services4Text()->text() ?>
              </div>
            </div>
          </div>

        </div>
      </section>



      <?php if($site->find('projects')->hasChildren()): ?>
        <div class="container" id="projects">
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
              <h2 class="module-title font-alt"><?= $site->find('projects')->title() ?></h2>
            </div>
          </div>
        </div>
      <?php endif ?>

      <?php $i = 0 ?>
      <?php foreach ($site->find('projects')->children() as $project):?>
        <?php $i++ ?>
        <section class="module pt-0 pb-0" id="about">
          <div class="row position-relative m-0">
            <div class="col-xs-12 col-md-7 <?php if (!($i%2)): ?>col-md-offset-5<?php endif ?> side-image" <?php if ($project->projectImage()->isNotEmpty()):?>data-background="<?= $project->projectImage()->toFile()->url() ?>" <?php endif ?>></div>
            <div class="col-xs-12 col-md-7 <?php if ($i%2): ?>col-md-offset-5<?php endif ?> side-image-text">
              <div class="row">
                <div class="col-sm-12">
                  <h2 class="module-title font-alt align-center"><?= $project->projectTitle()->text() ?></h2>
                  <div class="project-text col-sm-12 col-md-10 col-md-offset-1 align-center">
                    <?= $project->projectText()->kirbytext() ?>
                  </div>
                  <?php if($project->projectQuoteBool()->bool()): ?>
                    <div class="col-xs-12 pt-30">
                      <div class="project-quote row">
                        <div class="col-xs-4 col-md-3 ">
                          <img src="<?php if ($project->projectQuoteImg()->isNotEmpty()):?><?= $project->projectQuoteImg()->toFile()->crop(300,300)->url() ?><?php endif ?>" class="round-img">
                        </div>
                        <div class="col-xs-8 col-md-9 project-quote">
                          <div class="module-icon m-b-0"><span class="icon-quote project-quote-icon"></span>
                            <div class="project-quote-text">
                              <?= $project->projectQuoteText()->kirbytext() ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  <?php endif ?>

                </div>
              </div>
            </div>
          </div>
        </section>
      <?php endforeach ?>


      <footer class="footer bg-dark" id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <p class="copyright font-alt"><a href="mailto:<?= $page->contactMail()->text() ?>" target="_blank"><?= $page->contactMail()->text() ?></a> - <?= $page->contactAddress()->text() ?></p>
            </div>
            <div class="col-sm-6">
              <div class="footer-social-links"><a href="tel:<?= $page->contactPhone()->text() ?>" target="_blank"><?= $page->contactPhone()->text() ?></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
  </main>
  <!--
  JavaScripts
  =============================================
-->
<script src="assets/lib/jquery/dist/jquery.js"></script>
<script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/lib/wow/dist/wow.js"></script>
<script src="assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
<script src="assets/lib/isotope/dist/isotope.pkgd.js"></script>
<script src="assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
<script src="assets/lib/flexslider/jquery.flexslider.js"></script>
<script src="assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="assets/lib/smoothscroll.js"></script>
<script src="assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
<script src="assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
