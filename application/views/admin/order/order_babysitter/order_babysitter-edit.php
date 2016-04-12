<div id="page-wrapper">
<div class="row">
	<h1>Data Pemesan</h1>
	<div class="col-lg-12">
		<div class="panel-group">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	            Biodata Pemesan
	        </h4>
	      </div>
	      <div class="panel-body">
					<div class="form-group input-group">
		          <span class="input-group-addon">Nama</span>
							<p class="form-control"><?=$data->nama?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Email</span>
		          <p class="form-control"><?=$data->email?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">No. HP</span>
		          <p class="form-control"><?=$data->telpon?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">No. KTP</span>
		          <p class="form-control"><?=$data->ktp?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Bisa Dihubungi Kapan</span>
		          <p class="form-control"><?=$data->waktu_hubungi?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Jumlah Anak</span>
		          <p class="form-control"><?=$data->jumlah_anak?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Tujuan Mengambil</span>
		          <p class="form-control"><?=$data->tujuan?></p>
		      </div>

					<div class="form-group input-group">
		          <span class="input-group-addon">Keterangan</span>
		          <p class="form-control"><?=$data->tujuan?></p>
		      </div>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
							Nanny Yang Dipilih
					</h4>
				</div>
				<div class="panel-body">
					<div class="text-center">
						<?=img('babysitter/'.$babysitter->foto,array( 'class' => 'img img-circle foto-bunder' ))?>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Nama</span>
						<p class="form-control"><?=$babysitter->nama?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Jenis Kelamin</span>
						<p class="form-control"><?=$babysitter->nama?></p>
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon">Agama</span>
						<p class="form-control"><?=$babysitter->agama?></p>
					</div>
					<a href="<?=site_url('admin/babysitter/edit/'.$babysitter->id)?>" class="btn btn-primary form-control">Detail Babysitter</a>
				</div>
			</div>

			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
							Status
					</h4>
				</div>

			<div class="panel-body">
				<div class="form-group input-group">
					<form method="post" action="<?=site_url('/admin/order_babysitter/do_edit')?>">
						<select class="form-control"  name="status" required="">
							<?php
							$arr = array('BELUM DICEK','SUDAH DICEK','SUDAH DIHUBUNGI');
							foreach ($arr as $k) {
								$sel = $k == $data->status ? 'selected':'';
								echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
							}
							?>
					</select>
					<input type="hidden" name="id" value="<?=$data->id?>"/>
					<a href="<?=site_url('/admin/order_babysitter')?>" class="btn btn-default">Back</a>
					<input type="submit" name="submit" value="Save" class="btn btn-primary"/>
					<a href="<?=site_url('/admin/order_babysitter/delete/'.$data->id)?>" class="btn btn-danger">Delete</a>
					</form>
				</div>
			</div>


		<!-- /.table-responsive -->
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
