
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/detail.jpg')?>
                <div></div>
            </li>
        </ul>


          <div class="hero full-block">
              <div class="wrapper">
                  <div class="dynamic-row">
                      <div class="wrapper  wrap1">
                          <h1 class="title-wrapper choose-account" style="font-size:50px;"> <span> <!--Title--> <br>Biodata Babysitter</span> <span class="hero_subtitle"><!-- Subtitle--></span>
                            <span class="hero_desc">
                              <!--DESC-->
                                                </span>
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

<!-- KONTEN -->

<div class="container">
	<div class="row" style="width:100%;">
		<div class="col-lg-12">
			<div class="panel">
				<div class="panel-body">
					<?php
						if($babysitter->status!='Available')
							$ava='<span class="label label-danger label-kecil"><i class="fa fa-times"></i> '.$babysitter->status.'</span>';
						else
							$ava='<span class="label label-success label-kecil"><i class="fa fa-check"></i> '.$babysitter->status.'</span>';
					?>
					<h1><?=$babysitter->nama?></h1>
					 <?=$ava?>

					<!-- Foto -->
					<div class="text-center">
						<?=img('babysitter/'.$babysitter->foto,array('class' => 'img img-circle foto-bunder','alt'=>$babysitter->nama))?>
					</div>

					<!-- Informasi babysitter -->

					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Nama</span>
						<p class="form-control"><?=$babysitter->nama?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Jenis Kelamin</span>
						<p class="form-control"><?=$babysitter->kelamin?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Agama</span>
						<p class="form-control"><?=$babysitter->agama?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Pendidikan</span>
						<p class="form-control"><?=$babysitter->pendidikan?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Skill</span>
						<p class="form-control"><?=$babysitter->skill_level?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Penempatan</span>
						<p class="form-control">
								<?php
									if($babysitter->jawa)
										echo "Jawa, ";
									if($babysitter->luar_jawa)
										echo "Luar Jawa";
								?>
						</p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon" style="min-width:100px">Pengalaman</span>
						<p class="form-control"><?=$babysitter->pengalaman?></p>
					</div>
				</div>
			</div>
			<h2>Gallery babysitter</h2>
			<div>
				<?php
				if(count($gallery)>0){
					foreach ($gallery as $f){ ?>
						<div class="col-md-3 text-center">
							<a href="<?=img_url().'gallery_babysitter/'.$f->foto?>" target="_blank">
								<?=img('gallery_babysitter/'.$f->foto,array('class'=>'img img-responsive img-thumbnail','alt'=>$f->deskripsi))?>
								<p class="text-center link"><?=$f->deskripsi?></p>
							</a>
						</div>
					<?php }
				}else{
					echo "<p>Tidak ada gambar</p>";
				}?>
			</div>

			<div class="col-md-12">
				<br>
				<a href="<?=site_url('pemesanan/babysitter/'.$babysitter->id)?>" class="bttn blue btn-lg" style="width:100%">Pesan babysitter</a>
				<br><br>
			</div>
		</div>
	</div>
</section>
