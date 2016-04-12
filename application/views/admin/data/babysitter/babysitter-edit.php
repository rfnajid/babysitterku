<div id="page-wrapper">
<div class="row">
	<h1>Edit Data babysitter</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/babysitter/'.$data->foto,array('class'=>'img img-circle','style'=>'height:200px'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/babysitter/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required="" value="<?=$data->nama?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Alamat</span>
	          <input type="text" class="form-control" name="alamat" required="" value="<?=$data->alamat?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Kota</span>
	          <select class="form-control" name="kota">
							<?php
							foreach ($kota as $k) {
								$sel = $k->kota == $data->kota ? 'selected':'';
								echo '<option value="'.$k->kota.'" '.$sel.'>'.$k->kota.'</option>';
							}
							?>
						</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Telpon</span>
	          <input type="tel" name="telpon" class="form-control" required="" value="<?=$data->telpon?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Pendidikan</span>
	          <input type="text" name="pendidikan" class="form-control" required="" value="<?=$data->pendidikan?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Kelamin</span>
	          <select class="form-control" name="kelamin">
							<?php
							$kelamin = array('Laki-Laki','Perempuan');
							foreach ($kelamin as $k) {
								$sel = $k == $data->kelamin ? 'selected':'';
								echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
							}
							?>
						</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Agama</span>
	          <select class="form-control" name="agama">
							<?php
							$agama = array('Islam','Kristen','Katholik','Hindu','Budha','Kong Hu Chu');
							foreach ($agama as $k) {
								$sel = $k == $data->agama ? 'selected':'';
								echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
							}
							?>
						</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Tinggi (cm)</span>
	          <input type="number" min=0 max=255 name="tinggi" class="form-control" required=""  value="<?=$data->tinggi?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Berat (kg)</span>
	          <input type="number" min=0 max=255 name="berat" class="form-control" required=""  value="<?=$data->berat?>"/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">File Foto</span>
						<input type="file" class="form-control" name="file"/>
				</div>
				<div class="form-group input-group">
						<span class="input-group-addon">Skill Level</span>
						<select class="form-control" name="skill_level">
							<?php
							$skill = array('Junior','Medium','Expert');
							foreach ($skill as $k) {
								$sel = $k == $data->skill_level ? 'selected':'';
								echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
							}
							?>
						</select>
				</div>
				<div class="form-group input-group">
						<span class="input-group-addon">Penempatan</span>
						<select class="form-control" name="penempatan">
							<?php
								$j=""; $lj="";
								if($jawa & $luar_jawa);
								else {
									if($jawa)
										$j="selected";
									if($luar_jawa)
										$lj="selected";
								}
							?>
							<option value="all">Dimana Saja</option>
							<option <?=$j?>>Jawa</option>
							<option <?=$lj?>>Luar Jawa</option>
						</select>
				</div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Pengalaman</span>
	          <textarea name="pengalaman" class="form-control" rows=5><?=$data->pengalaman?></textarea>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Keyword</span>
	          <textarea name="keyword" class="form-control" rows=5><?=$data->keyword?></textarea>
	      </div>
				<div class="form-group input-group">
					<span class="input-group-addon">Status</span>
					<select class="form-control" name='status'>
						<?php
							$sta = array('Available','Not Available');
							foreach ($sta as $s) {
								$sel="";
								if($s==$data->status) $sel = "selected";
								?>
								<option <?=$sel?>><?=$s?></option>
						<?php } ?>
					</select>
				</div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/babysitter')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/babysitter/delete/'.$data->id)?>">Delete</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<input type="hidden" name="id" value="<?=$data->id?>"/>
			</form>
			<!-- /.table-responsive -->
		</div>
<?php /*
		<!-- Layanan -->
		<div class="panel-body">
			<h2>Posisi <a class="btn btn-primary" href="<?=site_url('/admin/babysitter/add_layanan/'.$data->id)?>">Add</a></h2>
			<table class="table table-striped table-bordered table-hover" id="tabel-simple">
				<thead>
					<tr>
						<th>Layanan</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; foreach($layanan as $row){ $i++; ?>
					<tr class="<?php if($i%2==0) echo 'even'; else echo 'odd';?> gradeX">
						<td class="center"><?=$row->layanan?></td>
						<td class="center"><a class="btn btn-primary" href="<?=site_url('admin/babysitter/delete_layanan/'.$data->id.'/'.$row->id)?>">Delete</a></td>
					</tr>
					<?php }
					if(count($layanan)<=0){
					echo '<tr class="even gradeX">
							<td class="center">
							Perawat ini tidak memiliki posisi/layanan
							</td>
							<td>
							</td>
							</tr>';
					}
					?>

				</tbody>
			</table>
		</div>
*/?>
		<!-- /.panel-body -->
		<div class="panel-body">
			<h2>Gallery <a class="btn btn-primary" href="<?=site_url('/admin/babysitter/add_gallery/'.$data->id)?>">Add</a></h2>
			<table class="table table-striped table-bordered table-hover" id="tabel-simple">
				<thead>
					<tr>
						<th>Foto</th>
						<th>Deskripsi</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; foreach($gallery as $row){ $i++; ?>
					<tr class="<?php if($i%2==0) echo 'even'; else echo 'odd';?> gradeX">
						<td class="text-center">
							<?=img('gallery_babysitter/'.$row->foto,array('class' => 'gallery-babysitter'))?>
						</td>
						<td class="center"><?=$row->deskripsi?></td>
						<td class="">
							<a class="btn btn-primary" href="<?=img_url().'/gallery_babysitter/'.$row->foto?>">Perbesar</a>
							<a class="btn btn-primary" href="<?=site_url('admin/babysitter/do_delete_gallery/'.$row->id)?>">Delete</a>
						</td>
					</tr>
					<?php }
					if(count($gallery)<=0){
					echo '<tr class="even gradeX">
							<td class="center">
							Gallery Kosong
							</td>
							<td>
							</td>
							<td>
							</td>
							</tr>';
					}
					?>

				</tbody>
			</table>
		</div>

		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
