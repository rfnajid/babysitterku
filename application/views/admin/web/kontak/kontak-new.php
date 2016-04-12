<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Form Kontak Baru</h1>
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/kontak/do_new')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Jenis</span>
	          <input type="text" class="form-control" name="jenis" required=""/>
	      </div>
	      <div class="form-group input-group">
	          <span class="input-group-addon">Kontak</span>
						<textarea class="form-control" name="isi" required=""></textarea>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/kontak')?>">Cancel</a>
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
