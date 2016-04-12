<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form FAQ Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/faq/do_new')?>">
				<div class="form-group input-group">
	          <span class="input-group-addon">Pertanyaan</span>
	          <input type="text" class="form-control" name="pertanyaan" required="""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Jawaban</span>
	          <textarea name="jawaban" class="form-control" rows="5"></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/faq')?>">Cancel</a>
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
