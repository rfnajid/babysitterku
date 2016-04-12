<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<div class="panel-body">
			<form method="post" action="<?=site_url('/admin/babysitter/do_add_layanan')?>">
	      <div class="form-group input-group">
					<?php if(!empty($layanan)) { ?>
	          <span class="input-group-addon">Posisi</span>
	          <select class="form-control" name="layanan">
							<?php
								foreach ($layanan as $row) {
									echo '<option value="'.$row->id.'">'.$row->layanan.'</option>';
								}
							?>
						</select>
	      </div>
				<input type="hidden" name="id_babysitter" value="<?=$id?>"/>
				<input type="submit" value="Save" class="pull-right btn btn-primary"/>
				<?php }
					else{
						echo '<p>Posisi sudah ditambahkan semua</p>';
					}
				?>
				<a class="pull-right btn btn-default" href="<?=site_url('/admin/babysitter/edit/'.$id)?>">Kembali</a>

			</form>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
