<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Alat Medis</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/alat_medis/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required="" value="<?=$data->nama?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Harga</span>
	          <input type="number" min="0" class="form-control" name="harga" required="" value="<?=$data->harga?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Deskripsi</span>
	          <textarea name="deskripsi" class="form-control" rows=5><?=$data->deskripsi?></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/alat_medis')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/alat_medis/delete/'.$data->id)?>">Delete</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<input type="hidden" name="id" value="<?=$data->id?>"/>
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
