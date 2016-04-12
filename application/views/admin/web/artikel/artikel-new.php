<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Artikel Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/artikel/do_new')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Judul</span>
	          <input type="text" class="form-control" name="judul" required=""/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Gambar Headline</span>
	          <input type="file" class="form-control" name="gambar"/>
	      </div>
				<div >
	          <textarea name="isi" id="editor"></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/artikel')?>">Cancel</a>
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
<?=js('ckeditor/spawner.js')?>
<script>
initSample();
</script>
