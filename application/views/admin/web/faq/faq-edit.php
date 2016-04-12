<div id="page-wrapper">
<div class="row">
	<h1>Edit FAQ</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/faq/do_edit')?>" enctype="multipart/form-data">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Pertanyaan</span>
	          <input type="text" class="form-control" name="pertanyaan" required="" value="<?=$data->pertanyaan?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Jawaban</span>
	          <textarea name="jawaban" class="form-control" rows="5"><?=$data->jawaban?></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/faq')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/faq/delete/'.$data->id)?>">Delete</a>
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
