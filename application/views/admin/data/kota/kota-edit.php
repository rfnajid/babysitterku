
<div id="page-wrapper">
<div class="row">
	<h1>Edit Kota/Kabupaten</h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/kota/do_edit')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama Kota</span>
	          <input name="kota" type="text" class="form-control" required value="<?=$data->kota?>"/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Provinsi</span>
	          <select class="form-control" name="provinsi">
							<?php
							foreach ($provinsi as $k) {
								$sel = $k->provinsi == $data->provinsi ? 'selected':'';
								echo '<option value="'.$k->provinsi.'" '.$sel.'>'.$k->provinsi.'</option>';
							}
							?>
						</select>
	      </div>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/kota')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/kota/delete/'.$data->id)?>">Delete</a>
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
