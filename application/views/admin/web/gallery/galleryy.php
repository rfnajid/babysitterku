<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>Gallery Foto</h1></h1><a class="btn btn-primary" href="<?=site_url('/admin/gallery/foto_add_new')?>">Add New</a>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="tabel-simple">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Foto</th>
              <th>Keterangan</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($foto as $row){ $i++; ?>
						<tr class="<?php if($i%2==0) echo 'even'; else echo 'odd';?> gradeX">
							<td class="center"><?=$row->judul?></td>
							<td class="center"><?=img('foto/'.$row->foto,array('style'=>'width:80%'))?></td>
							<td class="center"><?=$row->keterangan?></td>
              <td class="center"><a class="btn btn-primary" href="<?=site_url('admin/gallery/foto_edit/'.$row->id)?>">Edit</a></td>
            </tr>
						<?php } ?>
					</tbody>
				</table>
				<h1></h1>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->

	<div class="col-lg-12">
		<h1>Gallery Youtube</h1></h1><a class="btn btn-primary" href="<?=site_url('/admin/gallery/youtube_add_new')?>">Add New</a>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="tabel-simple2">
					<thead>
						<tr>
							<th>Judul</th>
							<th>Link</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($youtube as $row){ $i++; ?>
						<tr class="<?php if($i%2==0) echo 'even'; else echo 'odd';?> gradeX">
							<td class="center"><?=$row->judul?></td>
							<td class="center"><a href="<?=$row->link?>"><?=$row->link?></a></td>
              <td class="center"><a class="btn btn-primary" href="<?=site_url('admin/gallery/youtube_edit/'.$row->id)?>">Edit</a></td>
            </tr>
						<?php } ?>
					</tbody>
				</table>
				<h1></h1>
			</div>
			<!-- /.table-responsive -->
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.col-lg-12 -->

</div>
<!-- /.row -->
</div>
