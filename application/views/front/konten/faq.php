
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/faq.jpg')?>
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
                              <div class="centered_medium_anchor tellme_bttn -bttn -blue"> <a href="" rel="media-gallery" title="" style="color:#fff;"></a>
                                  <span style="font-size:14px;"><!-- JAM  --></span>
                                  <br><br><br><br>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

<!-- ISI -->

        <div class="about">
            <div class="wrapper wrapper-title">
                <h2>FAQ</h2><br>
            </div>
            <div class="container">
              <div class="panel-group">
                <?php $i=1; foreach ($faq as $f) { ?>
                  <div class="panel panel-default">
                      <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" data-target="#collapse<?=$i?>">
                          <h4 class="panel-title">
                              <a><?=$i?>. <?=$f->pertanyaan?></a>
                          </h4>
                      </div>
                      <div id="collapse<?=$i?>" class="panel-collapse collapse">
                          <div class="panel-body">
                              <p><?=$f->jawaban?></p>
                          </div>
                      </div>
                  </div>

                  <?php $i++; } ?>
              </div>
            </div>
        </div>
