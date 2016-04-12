
<div id="page-wrapper">
<div class="row">
	<h1>Edit review </h1>
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/review/do_edit')?>">
	      <div class="form-group input-group">
	          <span class="input-group-addon">Nama</span>
	          <input type="text" class="form-control" value="<?=$data->nama?>" disabled=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Email</span>
	          <input type="text" class="form-control" value="<?=$data->email?>" disabled=""/>
	      </div>
				<div class="form-group input-group">
	          <span class="input-group-addon">Bintang</span>
	          <p class="form-control">
							<?php for ($i=0;$i<5;$i++){
								if($i<$data->bintang)
									echo '<i class="fa fa-star fa-2x" style="color:#FD4"></i>';
								else
									echo '<i class="fa fa-star-o fa-2x" style="color:#FD4"></i>';
							} ?>
						</p>
	      </div>
				<div class="form-group input-group">
						<span class="input-group-addon">Review</span>
						<textarea class="form-control" rows=5 disabled=""><?=$data->review?></textarea>
				</div>

				<div class="form-group input-group">
					<span class="input-group-addon">Status</span>
					<select class="form-control" name='status'>
						<?php
							$sta = array('BELUM DICEK','AKTIF');
							foreach ($sta as $s) {
								$sel="";
								if($s==$data->status) $sel = "selected";
								?>
								<option <?=$sel?>><?=$s?></option>
						<?php } ?>
					</select>
				</div>

				<a class="pull-right btn btn-default" href="<?=site_url('/admin/review')?>">Cancel</a>
				<a class="pull-right btn btn-danger" href="<?=site_url('/admin/review/delete/'.$data->id)?>">Delete</a>
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

<script>
CKEDITOR.config.removePlugins= 'toolbar'
CKEDITOR.config.startupMode = 'source';
</script>
