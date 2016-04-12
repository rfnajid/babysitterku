
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/about.jpg')?>
                <div></div>
            </li>
        </ul>


          <div class="hero full-block">
              <div class="wrapper">
                  <div class="dynamic-row">
                      <div class="wrapper  wrap1">
                          <h1 class="title-wrapper choose-account"> <span class="hero_heading"> <!--Title--> </span> <span class="hero_subtitle"><!-- Subtitle--></span>
                            <!--<span class="hero_desc">
                              Mulai dari pengecatan rumah hingga personal trainer,  kami ahlinya menghadirkan profesional terbaik bagi setiap kebutuhan Anda.
                                                </span>-->
                          </h1>
                      </div>
                      <div class="wrapper choose-account-wrapper">
                          <div class="dynamic-row">
                              <div class="form-field" style="margin-top:8px;"></div>
                              <div class="centered_medium_anchor tellme_bttn -bttn -blue"> <a href="" rel="media-gallery" title="" style="color:#fff;"></a>
                                  <span style="font-size:14px;"><!-- JAM  --></span>
                                  <br><br><br><br>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<!-- ABOUT -->

        <div class="about">
            <div class="wrapper wrapper-title">
                <h2>Tentang Kami </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1 col-md-12">
                        <p><?=$page->isi?></p>
                    </div>
                </div>
            </div>
        </div>

<!-- TIM KAMI -->

        <div class="tim">
            <div class="wrapper wrapper-title">
                <h2> Tim Kami </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1 col-md-12 text-center">
                        <div class="row">
                          <?php $i=0; foreach ($tim as $k): $i++;?>
                            <div class="col-md-4 col-sm-4">
                              <div class="each-step">
                                  <?=img('tim/'.$k->foto,array('class'=>'foto-bunder'))?>
                                  <p><?=$k->nama?></p>
                                  <p class="subb"><?=$k->job?></p>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
