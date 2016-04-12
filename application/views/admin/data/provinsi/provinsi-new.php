<!-- Tidak Bisa dipakai -->

<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form Provinsi Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/provinsi/do_new')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama Provinsi</span>
	          <input type="text" class="form-control" name="provinsi" required=""/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/provinsi')?>">Cancel</a>
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
