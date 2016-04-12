<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form Testimonial Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/testimonial/do_new')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Isi</span>
	          <textarea name="isi" class="form-control" rows=5></textarea>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Foto</span>
						<input type="file" class="form-control" name="foto" required=""/>
				</div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Cover</span>
	          <input type="file" class="form-control" name="cover" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Link Video</span>
	          <input type="text" class="form-control" name="video" required=""/>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/testimonial')?>">Cancel</a>
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
