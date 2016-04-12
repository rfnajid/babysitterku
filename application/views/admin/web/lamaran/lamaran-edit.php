<div id="page-wrapper">
<div class="row">
	<h1>Data Pelamar</h1>
	<div class="col-lg-12">
		<div class="text-center" style="margin:25px">
			<?=img('/lamaran/wajah/'.$data->foto_wajah,array('class'=>'img img-circle','style'=>'height:200px'))?>
		</div>
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
							<p class="form-control"><?=$data->nama?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Email</span>
							<p class="form-control"><?=$data->email?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">No. HP</span>
		          <p class="form-control"><?=$data->telpon?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Jenis Kelamin</span>
		          <p class="form-control"><?=$data->kelamin?></p>
		      </div>

					<div class="form-group input-group">
						<span class="input-group-addon">Tempat Lahir</span>
						<p class="form-control"><?=$data->tempat_lahir?></p>
					</div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Tanggal Lahir</span>
		          <p class="form-control"><?=$data->tanggal_lahir?></p>
					</div>

					<div class="form-group input-group">
							<span class="input-group-addon">Bulan</span>
							<p class="form-control"><?=$data->bulan_lahir?></p>
							<span class="input-group-addon">Tahun</span>
							<p class="form-control"><?=$data->tahun_lahir?></p>
		      </div>

					<div class="form-group input-group">
						<span class="input-group-addon">Tinggi Badan (cm)</span>
						<p class="form-control"><?=$data->tinggi_badan?></p>
						<span class="input-group-addon">Berat Badan (kg)</span>
						<p class="form-control"><?=$data->berat_badan?></p>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">Anak ke</span>
						<p class="form-control"><?=$data->anak_ke?></p>
						<span class="input-group-addon">Dari</span>
						<p class="form-control"><?=$data->saudara?></p>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">Agama</span>
						<p class="form-control"><?=$data->agama?></p>
					</div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Riwayat Penyakit</span>
		          <p class="form-control"><?=$data->riwayat_penyakit?></p>
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
		          <span class="input-group-addon">Jalan/Dusun</span>
		          <p class="form-control"><?=$data->jalan?></p>
		      </div>
					<div class="form-group input-group">
		          <span class="input-group-addon">Kelurahan/Desa</span>
		          <p class="form-control"><?=$data->kelurahan?></p>
		      </div>
					<div class="form-group input-group">
		          <span class="input-group-addon">Kecamatan</span>
		          <p class="form-control"><?=$data->kecamatan?></p>
		      </div>
					<div class="form-group input-group">
		          <span class="input-group-addon">Kota/Kabupaten</span>
		          <p class="form-control"><?=$data->kota?></p>
		      </div>
					<div class="form-group input-group">
		          <span class="input-group-addon">Provinsi</span>
		          <p class="form-control"><?=$data->provinsi?></p>
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
							<p class="form-control"><?=$data->pendidikan_terakhir?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Nama Sekolah/Univ/Akademi/Lembaga</span>
		          <p class="form-control"><?=$data->asal_pendidikan?></p>
		      </div>

					<div class="form-group input-group">
						<span class="input-group-addon">Lulus Tahun</span>
						<p class="form-control"><?=$data->lulus_tahun?></p>
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
							<span class="input-group-addon">Posisi Yang diinginkan</span>
							<p class="form-control"><?=$data->posisi?></p>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">Keahlian</span>
						<p class="form-control"><?=$data->keahlian?></p>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">Pengalaman</span>
						<p class="form-control"><?=$data->pengalaman?></p>
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon">Gaji yang diinginkan</span>
						<p class="form-control"><?=$data->gaji?></p>
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
							<p class="form-control"><?=$data->nama_ortu?></p>
					</div>

					<div class="form-group input-group">
							<span class="input-group-addon">Pekerjaan Ortu*</span>
							<p class="form-control"><?=$data->pekerjaan_ortu?></p>
					</div>

					<div class="form-group input-group">
							<span class="input-group-addon">Nama Suami/Istri*</span>
							<p class="form-control"><?=$data->nama_suami?></p>
					</div>

					<div class="form-group input-group">
							<span class="input-group-addon">Pekerjaan Suami/Istri*</span>
							<p class="form-control"><?=$data->pekerjaan_suami?></p>
					</div>

					<div class="form-group input-group">
							<span class="input-group-addon">Mengetahui Insan Medika Dari</span>
							<p class="form-control"><?=$data->mengetahui?></p>
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
	          <span class="input-group-addon">Foto Wajah</span>
	          <div class=""><?=img('/lamaran/wajah/'.$data->foto_wajah,array('style' => 'max-width:200px' ))?></div>
		      </div>

					<div class="form-group input-group">
	          <span class="input-group-addon">Foto Seluruh Badan</span>
	          <div class><?=img('/lamaran/body/'.$data->foto_seluruh_badan,array('style' => 'max-width:200px' ))?></div>
		      </div>

					<div class="form-group input-group">
	          <a class="btn btn-default" href="<?=img_url().'/lamaran/wajah/'.$data->foto_wajah?>" download="<?=$data->foto_wajah?>">Download Foto Wajah</a>
						<a class="btn btn-default" href="<?=img_url().'/lamaran/body/'.$data->foto_seluruh_badan?>" download="<?=$data->foto_seluruh_badan?>">Download Foto Seluruh Badan</a>
						<a class="btn btn-default" href="<?=upload_url().'/lamaran/'.$data->berkas_lamaran?>" download="<?=$data->berkas_lamaran?>">Download Berkas Lamaran</a>
		      </div>
				</div>
		  </div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
							Status
					</h4>
				</div>

			<div class="panel-body">
				<div class="form-group input-group">
					<form method="post" action="<?=site_url('/admin/lamaran/do_edit')?>">
						<select class="form-control"  name="status" required="">
							<?php
							$arr = array('BELUM DICEK','SUDAH DICEK','AKAN DIPANGGIL');
							foreach ($arr as $k) {
								$sel = $k == $data->status ? 'selected':'';
								echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
							}
							?>
					</select>
					<input type="hidden" name="id" value="<?=$data->id?>"/>
					<a href="<?=site_url('/admin/lamaran')?>" class="btn btn-default">Back</a>
					<input type="submit" name="submit" value="Save" class="btn btn-primary"/>
					<a href="<?=site_url('/admin/lamaran/delete/'.$data->id)?>" class="btn btn-danger">Delete</a>
					</form>
				</div>
			</div>


		<!-- /.table-responsive -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
