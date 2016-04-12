<!-- Tidak Bisa dipakai -->

<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form Kota/Kabupaten Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/kota/do_new')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama Kota</span>
	          <input type="text" class="form-control" name="kota" required=""/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Provinsi</span>
						<select class="form-control" name="provinsi">
							<?php
								foreach ($provinsi as $row) {
									echo '<option value="'.$row->provinsi.'">'.$row->provinsi.'</option>';
								}
							?>
						</select>
				</div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/kota')?>">Cancel</a>
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
