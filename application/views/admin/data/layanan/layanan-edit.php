<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Edit Layanan</h1>
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/layanan/'.$data->gambar,array('class'=>'img img-circle','style'=>'height:200px'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/layanan/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="layanan" required="" value="<?=$data->layanan?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Deskripsi</span>
	          <textarea name="deskripsi" class="form-control" rows="5"><?=$data->deskripsi?></textarea>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Link</span>
	          <input type="text" class="form-control" name="link" required="" value="<?=$data->link?>"/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Gambar</span>
						<input type="file" class="form-control" name="gambar"/>
				</div>

				<a class="pull-right btn btn-default" href="<?=site_url('/admin/layanan')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/layanan/delete/'.$data->id)?>">Delete</a>
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
