<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Tambah Foto</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/babysitter/do_add_gallery')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">File Foto</span>
						<input name="file" type="file" class="form-control"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Judul</span>
						<input name="deskripsi" class="form-control"/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/babysitter/edit/'.$id)?>">Cancel</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<input type="hidden" name="id_babysitter" value="<?=$id?>" />
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
