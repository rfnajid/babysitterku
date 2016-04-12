
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/artikel.jpg')?>
                <div></div>
            </li>
        </ul>

          <div class="hero full-block">
              <div class="wrapper">
                  <div class="dynamic-row">
                      <div class="wrapper  wrap1">
                          <h1 class="title-wrapper choose-account"> <span class="hero_heading"> <!--Title--> </span> <span class="hero_subtitle"><!-- Subtitle--></span>
                          </h1>
                      </div>
                      <div class="wrapper choose-account-wrapper">
                          <div class="dynamic-row">
                              <div class="form-field" style="margin-top:8px;"></div>
                              <div class="centered_medium_anchor tellme_bttn -bttn -blue"> <a href="" rel="media-gallery" title="" style="color:#fff;"><i class="icon-font icon-font-mobile"></i></a>
                                  <span style="font-size:14px;"><!-- JAM  --></span>
                                  <br><br><br><br>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<!-- ISI -->
<?php foreach ($artikel as $a): ?>

        <div class="about">
            <div class="wrapper wrapper-title">
                <h2><?=$a->judul?></h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1 col-md-12">
                        <br>
                        <?=img('artikel/'.$a->gambar,array('class' => 'img text-center'))?>
                        <br><br>
                        <p><?=$a->headline?></p>
                        <br>
                        <br>
                        <a href="<?=site_url('artikel/view/'.$a->link)?>" class="bttn blue"/>Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

<?php endforeach; ?>
