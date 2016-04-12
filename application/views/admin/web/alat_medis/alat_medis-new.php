<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form Alat Medis Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/alat_medis/do_new')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required=""/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Harga</span>
	          <input type="number" class="form-control" name="harga" min="0" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Deskripsi</span>
	          <textarea name="deskripsi" class="form-control" rows=5></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/alat_medis')?>">Cancel</a>
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
