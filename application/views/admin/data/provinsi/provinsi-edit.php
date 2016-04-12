
<div id="page-wrapper">
<div class="row">
	<h1>Edit Provinsi</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/provinsi/do_edit')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama Provinsi</span>
	          <input name="provinsi" type="text" class="form-control" required value="<?=$data->provinsi?>"/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/provinsi')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/provinsi/delete/'.$data->id)?>">Delete</a>
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
