<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Gambar Slide Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/slide/do_new')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" name="nama" required=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Gambar</span>
	          <input type="file" class="form-control" name="gambar" required=""/>
	      </div>
				<!--<div class="form-group input-group">
	          <span class="input-group-addon">Link</span>
	          <input type="text" name="link" class="form-control" placeholder="Isi, untuk memunculkan tombol Read More">
	      </div>-->
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/slide')?>">Cancel</a>
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


<?=js('ckeditor/ckeditor.js')?>

<script>
CKEDITOR.config.removePlugins= 'toolbar'
CKEDITOR.config.startupMode = 'source';
</script>
