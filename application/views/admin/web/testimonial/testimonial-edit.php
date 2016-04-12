<style>
.cover {
    position: relative;
    width: 300px;
		height: 200px;
}
.cover .foto {
    position: absolute;
    top: 70%;
    left: 35%;
    color: #FFF;
		z-index: 2;
}
</style>

<div id="page-wrapper">
<div class="row">
	<h1>Edit Data Testimonial</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center cover" style="margin:25px">
				<?=img('/cover/'.$data->cover,array('class'=>'img','style'=>'width:100%;height:100%'))?>
				<?=img('/testimonial/'.$data->foto,array('class'=>'img img-circle foto','style'=>'height:100px;width:100px'))?>
			</div>
			<br><br>
			<form method="post" action="<?=site_url('/admin/testimonial/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required="" value="<?=$data->nama?>"/>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Isi</span>
						<textarea name="isi" class="form-control" rows=5><?=$data->isi?></textarea>
				</div>
				<div class="form-group input-group">
						<span class="input-group-addon">Foto</span>
						<input type="file" class="form-control" name="foto" />
				</div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Cover</span>
	          <input type="file" class="form-control" name="cover" />
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Link Video</span>
	          <input type="text" class="form-control" name="video" required="" value="<?=$data->video?>"/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/testimonial')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/testimonial/delete/'.$data->id)?>">Delete</a>
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
