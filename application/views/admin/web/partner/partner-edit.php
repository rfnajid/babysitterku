<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Partner</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/partner/'.$data->gambar,array('class'=>'img img-circle','style'=>'height:200px'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/partner/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required="" value="<?=$data->nama?>"/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Gambar</span>
						<input type="file" class="form-control" name="gambar" />
				</div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Link</span>
	          <input type="text" class="form-control" name="link" required="" value="<?=$data->link?>"/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/partner')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/partner/delete/'.$data->id)?>">Delete</a>
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
