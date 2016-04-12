<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Video Youtube Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/gallery/youtube_do_new')?>" enctype="multipart/form-data">
				<div class="form-group input-group">
	          <span class="input-group-addon">Judul</span>
	          <input type="text" class="form-control" name="judul" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Link</span>
	          <input type="text" class="form-control" name="link" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Thumbnail</span>
	          <input type="file" class="form-control" name="thumbnail" required=""/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/gallery')?>">Cancel</a>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
