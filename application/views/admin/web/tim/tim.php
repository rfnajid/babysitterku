<div id="page-wrapper">
<div class="row">
	<div class="col-lg-12">
		<h1>List Tim</h1></h1><a class="btn btn-primary" href="<?=site_url('/admin/tim/add_new')?>">Add New</a>
		<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover" id="tabel-simple">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Job</th>
              <th></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=0; foreach($data as $row){ $i++; ?>
						<tr class="<?php if($i%2==0) echo 'even'; else echo 'odd';?> gradeX">
							<td class="center"><?=$row->nama?></td>
							<td class="center"><?=$row->job?></td>
              <td class="center"><a class="btn btn-primary" href="<?=site_url('admin/tim/edit/'.$row->id)?>">Edit</a></td>
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
