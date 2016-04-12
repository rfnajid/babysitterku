<div id="page-wrapper">
<div class="row">
	<h1>Edit Page</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/page/do_edit')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <p class="form-control"><?=$data->nama?></p>
	      </div>
				<div >
	          <textarea name="isi" id="editor"><?=$data->isi?></textarea>
	      </div>
				<p>Link : <a href="<?=site_url('/page/view/'.$data->link)?>"><?=site_url('/page/view/'.$data->link)?></a></p>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/page')?>">Cancel</a>
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

<?=js('ckeditor/ckeditor.js')?>
<?=js('ckeditor/spawner.js')?>
<script>
initSample();
</script>
