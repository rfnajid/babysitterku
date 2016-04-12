<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Tim</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/tim/'.$data->foto,array('class'=>'img img-circle','style'=>'height:200px'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/tim/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required="" value="<?=$data->nama?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Job</span>
	          <input type="text" class="form-control" name="job" required="" value="<?=$data->job?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Foto</span>
	          <input type="file" class="form-control" name="foto" />
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Keterangan</span>
	          <textarea name="keterangan" class="form-control" rows=5><?=$data->keterangan?></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/tim')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/tim/delete/'.$data->id)?>">Delete</a>
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
