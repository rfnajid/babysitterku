<style>
.input-group-addon{
	min-width: 150px;
}
</style>

<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/pesan.jpg')?>
                <div></div>
            </li>
        </ul>


          <div class="hero full-block">
              <div class="wrapper">
                  <div class="dynamic-row">
                      <div class="wrapper  wrap1">
                          <h1 class="title-wrapper choose-account" style="font-size:50px;"> <span> <!--Title--> <br>Form Pemesanan</span> <span class="hero_subtitle"><!-- Subtitle--></span>
                            <span class="hero_desc">
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


<section id="content">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<br>
		</div>
	</div>
</div>
</section>
<section>
<div class="container">
	<form method="post" action="<?=site_url('pemesanan/submit_pemesanan_babysitter')?>">
	<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
            Biodata Pemesan
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
	          <span class="input-group-addon">No. KTP</span>
	          <input type="number" class="form-control" name="ktp" min="0" required=""/>
	      </div>

				<div class="form-group input-group">
	          <span class="input-group-addon">Bisa Dihubungi Kapan</span>
	          <input type="text" class="form-control" name="waktu_hubungi" required=""/>
	      </div>

				<div class="form-group input-group">
	          <span class="input-group-addon">Jumlah Anak</span>
	          <input type="number" class="form-control" name="jumlah_anak" min="0" required=""/>
	      </div>

				<div class="form-group input-group">
	          <span class="input-group-addon">Tujuan Mengambil</span>
	          <textarea class="form-control" name="tujuan" required=""></textarea>
	      </div>

				<div class="form-group input-group">
	          <span class="input-group-addon">Keterangan</span>
	          <textarea class="form-control" name="keterangan" required=""></textarea>
	      </div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
						Babysitter Yang Dipilih
				</h4>
			</div>
			<div class="panel-body">
				<div class="form-group input-group">
					<span class="input-group-addon">Nama babysitter</span>
					<p class="form-control"><?=$babysitter->nama?></p>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Jenis Kelamin</span>
					<p class="form-control"><?=$babysitter->kelamin?></p>
				</div>
				<div class="form-group input-group">
					<span class="input-group-addon">Agama</span>
					<p class="form-control"><?=$babysitter->agama?></p>
				</div>

				<input type="hidden" name="id_babysitter" value="<?=$babysitter->id?>"/>

			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title">
						Pernyataan
				</h4>
			</div>
			<div class="panel-body">
				<div class="form-group input-group">
					Dengan ini saya menyatakan data yang saya isikan benar / dapat dipertanggung jawabkan dan saya telah menyetujui <a style="color:blue" href="<?=site_url('page/view/term')?>">syarat & ketentuan yang berlaku</a>
					<br>
					<input type="checkbox" name="check" required/>
				</div>
			</div>
		</div>
		<br>
		<input type="submit" name="submit" value="Submit" class="btn btn-primary pull-right"/>
		<br>
	</form>
	</div>
</section>
