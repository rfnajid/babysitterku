<div id="page-wrapper">
<div class="row">
	<h1>Edit Artikel</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<div class="text-center" style="margin:25px">
				<?=img('/artikel/'.$data->gambar,array('class'=>'img','style'=>'width:100%'))?>
			</div>
			<form method="post" action="<?=site_url('/admin/artikel/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Judul</span>
	          <input type="text" class="form-control" name="judul" required="" value="<?=$data->judul?>"/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Gambar Headline</span>
	          <input type="file" class="form-control" name="gambar"/>
	      </div>
				<div >
	          <textarea name="isi" id="editor"><?=$data->isi?></textarea>
	      </div>
				<em>Artikel ini ditulis pada tanggal <b><?=date('d-m-Y',strtotime($data->tanggal))?></b></em>
				<p>Link : <a href="<?=site_url('/artikel/post/'.$data->link)?>"><?=site_url('/artikel/post/'.$data->link)?></a></p>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/artikel')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/artikel/delete/'.$data->id)?>">Delete</a>
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
