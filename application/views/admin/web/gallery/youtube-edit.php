<div id="page-wrapper">
<div class="row">
	<h1>Edit Video Youtube</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('youtube/'.$youtube->thumbnail,array('class'=>'img','style'=>'height:200px'))?>
				<br>
				<a href="<?=$youtube->link?>" class="btn btn-primary">Play Video</a>
			</div>
			<form method="post" action="<?=site_url('/admin/gallery/youtube_do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Judul</span>
	          <input type="text" class="form-control" name="judul" required="" value="<?=$youtube->judul?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Embed Link</span>
	          <input type="text" class="form-control" name="link" required="" value="<?=$youtube->link?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Thumbnail</span>
	          <input type="file" class="form-control" name="thumbnail" value="<?=$youtube->thumbnail?>"/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/gallery')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/gallery/youtube_delete/'.$youtube->id)?>">Delete</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<input type="hidden" name="id" value="<?=$youtube->id?>"/>
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
