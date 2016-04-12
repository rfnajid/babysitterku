
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/lamaran.jpg')?>
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

<!-- ISI -->

<style>
.input-group-addon{
  min-width: 250px;
}
</style>

        <div class="about">
            <div class="wrapper wrapper-title">
                <h2>Kontak Kami</h2>
                <br>
            </div>
            <div class="container">
              <form method="post" action="<?=site_url('lamaran/submit')?>" enctype="multipart/form-data">
            	<div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                        Biodata
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
            	          <span class="input-group-addon">Jenis Kelamin</span>
            	          <select name="kelamin" required="" class="form-control">
            							<option value="LAKI-LAKI">LAKI-LAKI</option>
            							<option value="PEREMPUAN">PEREMPUAN</option>
            						</select>
            	      </div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Tempat Lahir</span>
            					<input type="text" class="form-control" name="tempat_lahir" required=""/>
            				</div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Tanggal Lahir</span>
            	          <input type="number" min="1" max=31 class="form-control" name="tanggal_lahir" required=""/>
            				</div>

            				<div class="form-group input-group">
            						<span class="input-group-addon">Bulan</span>
            						<input type="number" min="1" max="12" class="form-control" name="bulan_lahir" required=""/>
            						<span class="input-group-addon">Tahun</span>
            						<input type="number" class="form-control" name="tahun_lahir" required=""/>
            	      </div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Tinggi Badan (cm)</span>
            					<input type="number" min="0" max="255" class="form-control" name="tinggi_badan" required=""/>
            					<span class="input-group-addon">Berat Badan (kg)</span>
            					<input type="number" min="0" max="255" class="form-control" name="berat_badan" required=""/>
            				</div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Anak ke</span>
            					<input type="number" min=1 max="255" class="form-control" name="anak_ke" required=""/>
            					<span class="input-group-addon">Dari</span>
            					<input type="number" min=1 max="255" class="form-control" name="saudara" required=""/>
            				</div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Agama</span>
            					<select name="agama" required="" class="form-control">
            						<option value="ISLAM">ISLAM</option>
            						<option value="PROTESTAN">PROTESTAN</option>
            						<option value="KATHOLIK">KATHOLIK</option>
            						<option value="HINDU">HINDU</option>
            						<option value="BUDHA">BUDHA</option>
            						<option value="KONG HU CHU">KONG HU CHU</option>
            					</select>
            				</div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Riwayat Penyakit</span>
            	          <textarea name="riwayat_penyakit" class="form-control" rows=5></textarea>
            	      </div>
            			</div>
            		</div>
            		<div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                        Lokasi
                    </h4>
                  </div>
                  <div class="panel-body">

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama Jalan/Dusun</span>
            	          <input type="text" class="form-control" name="jalan" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama Kelurahan/Desa</span>
            	          <input type="text" class="form-control" name="kelurahan" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama Kecamatan</span>
            	          <input type="text" class="form-control" name="kecamatan" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama Kota/Kabupaten</span>
            	          <input type="text" class="form-control" name="kota" required=""/>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Provinsi</span>
            	          <input type="text" class="form-control" name="provinsi" required=""/>
            	      </div>
            			</div>
            		</div>

            		<div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                        Riwayat Pendidikan
                    </h4>
                  </div>
                  <div class="panel-body">

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Pendidikan Terakhir</span>
            						<select name="pendidikan_terakhir" required="" class="form-control">
            							<option value="SD SEDERAJAT">SD SEDERAJAT</option>
            							<option value="SMP SEDERAJAT">SMP SEDERAJAT</option>
            							<option value="SMA SEDERAJAT">SMA SEDERAJAT</option>
            							<option value="SMK">SMK SEDERAJAT</option>
            							<option value="D1">D1</option>
            							<option value="D2">D2</option>
            							<option value="D3">D3</option>
            							<option value="D3">D3</option>
            							<option value="S1">S1</option>
            						</select>
            	      </div>

            				<div class="form-group input-group">
            	          <span class="input-group-addon">Nama Sekolah/Univ/Akademi/Lembaga</span>
            	          <input type="text" class="form-control" name="asal_pendidikan" required=""/>
            	      </div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Lulus Tahun</span>
            					<input type="number" class="form-control" name="lulus_tahun" required=""/>
            				</div>
            			</div>
            		</div>

            		<div class="panel panel-default">
            			<div class="panel-heading">
            				<h4 class="panel-title">
            						Tentang Pekerjaan
            				</h4>
            			</div>
            			<div class="panel-body">

            				<div class="form-group input-group">
            					<span class="input-group-addon">Keahlian</span>
            					<textarea name="keahlian" class="form-control" rows=5></textarea>
            				</div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Pengalaman</span>
            					<textarea name="pengalaman" class="form-control" rows=5></textarea>
            				</div>

            				<div class="form-group input-group">
            					<span class="input-group-addon">Gaji yang diinginkan</span>
            					<input type="text" name="gaji" class="form-control"/>
            				</div>
            			</div>
            		</div>

            		<div class="panel panel-default">
            			<div class="panel-heading">
            				<h4 class="panel-title">
            						Informasi Tambahan
            				</h4>
            			</div>
            			<div class="panel-body">
            				<div class="form-group input-group">
            						<span class="input-group-addon">Nama Orang Tua*</span>
            						<input type="text" class="form-control" name="nama_ortu"/>
            				</div>

            				<div class="form-group input-group">
            						<span class="input-group-addon">Pekerjaan Ortu*</span>
            						<input type="text" class="form-control" name="pekerjaan_ortu"/>
            				</div>

            				<div class="form-group input-group">
            						<span class="input-group-addon">Nama Suami/Istri*</span>
            						<input type="text" class="form-control" name="nama_suami"/>
            				</div>

            				<div class="form-group input-group">
            						<span class="input-group-addon">Pekerjaan Suami/Istri*</span>
            						<input type="text" class="form-control" name="pekerjaan_suami"/>
            				</div>

            				<div class="form-group input-group">
            						<span class="input-group-addon">Mengetahui Babysitterku Dari</span>
            						<select class="form-control" name="mengetahui" required="">
            							<option value="Iklan">Iklan</option>
            							<option value="Brosur">Brosur</option>
            							<option value="Teman">Teman</option>
            							<option value="Media">Media</option>
            							<option value="Internet">Internet</option>
            						</select>
            				</div>
            			</div>
            		</div>

            		<div class="panel panel-default">
            			<div class="panel-heading">
            				<h4 class="panel-title">
            						File-File
            				</h4>
            			</div>
            			<div class="panel-body">
            				<div class="form-group input-group">
                      <span class="input-group-addon">Foto Wajah (.jpg)</span>
                      <input type="file" class="form-control" name="foto_wajah" required="" accept="image/*"/>
            	      </div>

            				<div class="form-group input-group">
                      <span class="input-group-addon">Foto Seluruh Badan (.jpg)</span>
                      <input type="file" class="form-control" name="foto_seluruh_badan" required="" accept="image/*"/>
            	      </div>

            				<div class="form-group input-group">
                      <span class="input-group-addon">Berkas Lamaran (.zip)</span>
                      <input type="file" class="form-control" name="berkas_lamaran" required="" accept=".zip"/>
            	      </div>
            				<i>File yang di upload berformat zip. Berkas berisi CV,Ijazah,Sertifikat, dan berkas-berkas pendukung lainnya</i>
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
            					Dengan ini saya menyatakan data yang saya isikan benar / dapat dipertanggung jawabkan dan saya telah menyetujui <a style="color:blue" href="<?=site_url('page/view/tos-tenaga-kerja')?>">syarat & ketentuan yang berlaku</a>
            					<br>
            					<input type="checkbox" name="check" required/>
            				</div>
            			</div>
            		</div>
            		<br>
            		<input type="submit" name="submit" value="Submit" class="btn btn-primary pull-right"/>
            		<p><em>Keterangan : (*) Tidak Wajib Diisi</em></p>
            		<br>
            	</form>
            	</div>
        </div>
