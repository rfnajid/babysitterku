<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form babysitter Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/babysitter/do_new')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required=""/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Alamat</span>
	          <input type="text" class="form-control" name="alamat" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Kota</span>
	          <select class="form-control" name="kota">
							<?php
							foreach ($kota as $k) {
								echo '<option value="'.$k->kota.'">'.$k->kota.'</option>';
							}
							?>
						</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Telpon</span>
	          <input type="tel" name="telpon" class="form-control" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Pendidikan</span>
	          <input type="text" name="pendidikan" class="form-control" required=""/>
	      </div>
				<div class="form-group input-group">
	        <span class="input-group-addon">Kelamin</span>
	        <select class="form-control" name="kelamin">
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Agama</span>
	          <select class="form-control" name="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Katholik">Katholik</option>
							<option value="Hindu">Hindu</option>
							<option value="Budha">Budha</option>
							<option value="Kong Hu Cu">Kong Hu Cu</option>
						</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Tinggi (cm)</span>
	          <input type="number" min=0 max=255 name="tinggi" class="form-control" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Berat (kg)</span>
	          <input type="number" min=0 max=255 name="berat" class="form-control" required=""/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">File Foto</span>
						<input type="file" class="form-control" name="file" required=""/>
				</div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Skill Level</span>
	          <select class="form-control" name="skill_level">
							<?php
							$skill = array('Junior','Medium','Expert');
							foreach ($skill as $k) {
								echo '<option value="'.$k.'">'.$k.'</option>';
							}
							?>
						</select>
	      </div>
				<div class="form-group input-group">
	        <span class="input-group-addon">Penempatan</span>
	        <select class="form-control" name="penempatan">
						<option value="all">Dimana Saja</option>
						<option>Jawa</option>
						<option>Luar Jawa</option>
					</select>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Pengalaman</span>
	          <textarea name="pengalaman" class="form-control" rows=5></textarea>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Keyword</span>
	          <textarea name="keyword" class="form-control" rows=5></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/babysitter')?>">Cancel</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
