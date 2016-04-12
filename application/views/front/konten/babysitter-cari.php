
<?php
extract($query);
?>


<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow">
            <li>
                <?=img('wallpaper/cari.jpg')?>
                <div></div>
            </li>
        </ul>


          <div class="hero full-block">
              <div class="wrapper">
                  <div class="dynamic-row">
                      <div class="wrapper  wrap1">
                          <h1 class="title-wrapper choose-account" style="font-size:50px;"> <span> <!--Title--> <br>Cari Babysitter</span> <span class="hero_subtitle"><!-- Subtitle--></span>
                            <span class="hero_desc">
                              Temukan Babysitter Terbaik
                                                </span>
                          </h1>
                      </div>
                      <div class="wrapper choose-account-wrapper">
                          <div class="dynamic-row">
                              <div class="form-field" style="margin-top:8px;"></div>
                              <div class="centered_medium_anchor tellme_bttn -bttn -blue"> <a href="" rel="media-gallery" title="" style="color:#fff;"></a>
                                  <span style="font-size:14px;"><!-- JAM  --></span>
                                  <br><br><br><br>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


<div class="about">
	<div class="container">
		<div class="row" style="margin:0px;width:100%">
			<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<form method="get" action=<?=site_url('babysitter/cari')?>>
								<input type="text" name="key" class="form-control" placeholder="Masukkan Kata Kunci..." value="<?=$key?>"/>
								<br>
								<div class="form-group input-group">
									<span class="input-group-addon" >Agama</span>
									<select name="agama" class="form-control">
										<option value="all">Semua</option>
										<?php
										$a= array('Islam','Kristen','Katholik','Hindu','Budha','Kong Hu Chu');
										foreach ($a as $k) {
											$sel = $k == $agama? 'selected':'';
											echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
										}
										?>
									</select>
								</div>
								<div class="form-group input-group">
									<span class="input-group-addon" >Gender</span>
									<select name="kelamin" class="form-control">
										<option value="all">Semua</option>
											<?php
											$kel = array('Laki-Laki','Perempuan');
											foreach ($kel as $k) {
												$sel = $k == $kelamin ? 'selected':'';
												echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
											}
											?>
									</select>
								</div>
								<div class="form-group input-group">
									<span class="input-group-addon" >Penempatan</span>
									<select name="penempatan" class="form-control">
										<option value="all">Semua</option>
										<?php
										$kel = array('Jawa','Luar Jawa');
										foreach ($kel as $k) {
											$sel = $k == $penempatan ? 'selected':'';
											echo '<option value="'.$k.'" '.$sel.'>'.$k.'</option>';
										}
										?>
									</select>
								</div>
								<button class="btn btn-primary form-control">Cari</button>
							</form>
						</div>
					</div>
			</div>




			<div class="col-md-12">
				<?php
					if(count($babysitter)<=0){
						echo '
							<div class="panel panel-default">
								<div class="row">
									<div class="col-md-12">
										<div class="container">
											<h3>Tidak ada babysitter yang sesuai kriteria</h3>
										</div>
									</div>
								</div>
							</div>
						';
					}
				?>
				<?php foreach ($babysitter as $s):
				if($s->status!='Available')
					$ava='<span class="label label-danger label-kecil"><i class="fa fa-times"></i> '.$s->status.'</span>';
				else
					$ava='<span class="label label-success label-kecil"><i class="fa fa-check"></i> '.$s->status.'</span>';
				?>
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="row">
							<div class="col-md-4">
								<div class="text-center">
									<?=img('babysitter/'.$s->foto,array('class'=>'img img-circle','style'=>'width:140px;height:140px;','alt'=>$s->nama))?>
								</div>
							</div>
							<div class="col-md-8">
								<h2>
									<a href="<?=site_url('babysitter/detail/'.$s->id)?>"><?=$s->nama?></a>
									<?=$ava?>
								</h2>
								<?php /*<p>
									<i class="fa fa-star star"></i>
									3.4 dari <a href="<?=site_url('babysitter/detail/'.$s->id)?>#review" class="link">4 reviews</a>
								</p>*/?>
								<p style="font-size:15px;">
									<?php if($s->kelamin=="Laki-Laki") {?>
									<i class="fa fa-male"></i>
									Laki-Laki
									<?php } else { ?>
									<i class="fa fa-female"></i>
									Perempuan
									<?php }?>
									<i class="fa fa-heart"></i>
									<?=$s->agama?>
									<i class="fa fa-globe"></i>
									Level <?=$s->skill_level?>
									<i class="fa fa-graduation-cap"></i>
									<?=$s->pendidikan?>
								</p>
								<p style="font-size:18px">
									<?=$s->pengalaman?>
								</p>
								<div class="">
									<a href="<?=site_url('babysitter/detail/'.$s->id)?>" class="bttn blue" style="margin-top:10px">Detail</a>
									<a href="<?=site_url('pemesanan/babysitter/'.$s->id)?>" class="bttn blue" style="margin-top:10px">Pesan</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

			<ul class="pagination pull-right">
			  <?php
					$url = site_url('babysitter/cari').'?key='.$key.'&agama='.$agama.'&kelamin='.$kelamin.'&penempatan='.$penempatan.'&page=';
					$pagelimit=5;
					if(count($babysitter)>0){
						$count_page=round($count_page,0,PHP_ROUND_HALF_UP)+1;
						$start=1; $end=$count_page;
						if($page-2>0 && $page+2<$count_page) { //tengah
							$start=$page-2;
							$end=$page+2;
						}else if($page-2<=0){ //depan
							$start=1;
							$end=$pagelimit;
							if($count_page<$pagelimit)
								$end=$count_page;

						}else if($page+2>=$count_page){ //belakang
							$start=$count_page-4;
							$end=$count_page;
						}

						if($start!=1){
							echo '<li><a href="'.$url.'1'.'">«</a></li>';
							echo '<li><a href="'.$url.($start-1).'">‹</a></li>';
						}

						for ($i=$start; $i<=$end; $i++) {
							$active='class="active"';
							if($i!=$page)
								$active="";

							echo '<li '.$active.'><a href="'.$url.$i.'">'.$i.'</a></li>';
						}

						if($end!=$count_page){
							echo '<li><a href="'.$url.($end+1).'">›</a></li>';
							echo '<li><a href="'.$url.$count_page.'">»</a></li>';
						}
					}
				?>
			</ul>
		</div>
	</div>
</div>
