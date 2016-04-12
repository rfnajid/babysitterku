<div id="page-wrapper">
<div class="row">
	<h1>Edit FAQ</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/foto/'.$foto->foto,array('class'=>'img','style'=>'height:200px'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/gallery/foto_do_edit')?>" enctype="multipart/form-data">
				<div class="form-group input-group">
						<span class="input-group-addon">Judul</span>
						<input type="text" class="form-control" name="judul" required="" value="<?=$foto->judul?>"/>
				</div>
				<div class="form-group input-group">
						<span class="input-group-addon">Foto</span>
						<input type="file" class="form-control" name="foto"/>
				</div>
				<div class="form-group input-group">
						<span class="input-group-addon">Keterangan</span>
						<textarea name="keterangan" class="form-control" rows="5"><?=$foto->keterangan?></textarea>
				</div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/gallery')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/gallery/foto_delete/'.$foto->id)?>">Delete</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<input type="hidden" name="id" value="<?=$foto->id?>"/>
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
