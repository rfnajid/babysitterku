
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('artikel/'.$artikel->gambar)?>
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
                <h2><?=$artikel->judul?></h2>
            </div>
            <div class="container">
            	<form method="post" action="<?=site_url('contact/post')?>">
            	<div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">

                    </h4>
                  </div>
                  <div class="panel-body">
            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama</span>
            	          <input type="text" class="form-control" name="nama" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Email</span>
            	          <input type="email" class="form-control" name="email" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">No. HP</span>
            	          <input type="tel" class="form-control" name="telpon" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Pesan</span>
            	          <textarea class="form-control" name="pesan" rows="7" required=""></textarea>
            	      </div>
            			</div>
            		</div>

            		<br>
            		<input type="submit" name="submit" value="Send" class="btn btn-primary text-center"/>
            		<br>
            	</form>
            	</div>
        </div>
