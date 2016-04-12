<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Kontak</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/kontak/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Jenis</span>
	          <input type="text" class="form-control" name="jenis" required="" value="<?=$data->jenis?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Kontak</span>
	          <textarea class="form-control" name="isi" required=""><?=$data->isi?></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/kontak')?>">Cancel</a>
				<?php /*<a class="pull-right btn btn-danger" href="<?=site_url('/admin/kontak/delete/'.$data->id)?>">Delete</a>*/ ?>
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
