
<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Paket</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/paket/do_edit')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama Paket</span>
	          <input type="text" class="form-control" value="<?=$data->paket?>" name="paket"/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Deskripsi</span>
						<textarea name="deskripsi" class="form-control" rows=5><?=$data->deskripsi?></textarea>
				</div>
				<i>Pada Deskripsi, pisahkan dengan menggunakan tanda 'enter'></i>

				<a class="pull-right btn btn-default" href="<?=site_url('/admin/paket')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/paket/delete/'.$data->id)?>">Delete</a>
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

<?=js('ckeditor/ckeditor.js')?>

<script>
CKEDITOR.config.removePlugins= 'toolbar'
CKEDITOR.config.startupMode = 'source';
</script>
