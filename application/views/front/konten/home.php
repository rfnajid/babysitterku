
<!-- SLIDER -->
    <div class="overview">
        <!--<div class="hero-darker"></div>-->
        <ul class="cb-slideshow" id="slide">
            <?php foreach ($slide as $s): ?>
            <li>
                <?=img('slider/'.$s->gambar)?>
                <div></div>
            </li>
            <?php endforeach; ?>
        </ul>

<!-- Slider Text -->

        <div class="hero full-block">
            <div class="wrapper">
                <div class="dynamic-row">
                    <div class="wrapper  wrap1">
                        <h1 class="title-wrapper choose-account"> <span class="hero_heading"> Cari Babysitter Terpercaya </span> <span class="hero_subtitle"> Pesan sekarang, babysitter akan datang dalam beberapa jam. </span>
                          <!--<span class="hero_desc">
                            Mulai dari pengecatan rumah hingga personal trainer,  kami ahlinya menghadirkan profesional terbaik bagi setiap kebutuhan Anda.
                                              </span>-->
                        </h1>
                    </div>
                    <div class="wrapper choose-account-wrapper">
                        <div class="dynamic-row">
                            <div class="form-field" style="margin-top:8px;"></div>
                            <a class="bttn blue" href="<?=site_url('babysitter')?>">Pesan Sekarang</a>
                            <div class="centered_medium_anchor tellme_bttn -bttn -blue"> <a href="tel:<?=$kontak['hotline1']?>" rel="media-gallery" title="" style="color:#fff;"><i class="icon-font icon-font-mobile"></i><?=$kontak['hotline1']?> & <?=$kontak['hotline2']?></a>
                                <br>
                                <span style="font-size:14px;">06.00-21.00 Senin-Minggu</span>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Diliput Oleh -->

        <div class="white-bg-container">
            <div class="wrapper wrapper-title small-title" style="margin-bottom:0px;margin-top:30px;">
                <h2> Diliput Oleh </h2>
                <div id="owl-example">
                  <?php foreach ($diliput as $d): ?>
                    <div class="owl-item">
                        <div>
                            <a href="<?=$d->link?>" target="_blank">
                              <?=img('diliput/'.$d->gambar,array('class'=>'img','height'=>'100','alt'=>'Jasa Babysitter Terbaik di Indonesia'))?>
                            </a>
                        </div>
                    </div>
                  <?php endforeach; ?>
                </div>
            </div><br><br><br>
        </div>

<!-- KENAPA KAMI -->

        <div class="how-it-works">
            <div class="wrapper wrapper-title">
                <h2> Kenapa Kami? </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1 col-md-12 text-center">
                        <div class="row">
                          <?php $i=0; foreach ($kenapa as $k): $i++;?>
                            <div class="col-md-4 col-sm-4">
                              <div class="each-step">
                                  <?=img('kenapa/'.$k->gambar,array('class'=>'icon'))?>
                                  <p><em><?=$i?></em><?=$k->kenapa?></p>
                                  <span><?=$k->deskripsi?></span>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- CARA KERJA -->

        <div class="how-it-works" id="carakerja">
            <div class="wrapper wrapper-title">
                <h2> Cara Kerja? </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1 col-md-12 text-center">
                        <div class="row">
                          <?php $i=0; foreach ($carakerja as $c): $i++;?>
                            <div class="col-md-4 col-sm-4">
                              <div class="each-step">
                                  <?=img('carakerja/'.$c->gambar,array('class'=>'icon'))?>
                                  <p><em><?=$i?></em><?=$c->carakerja?></p>
                                  <span><?=$c->deskripsi?></span>
                                </div>
                            </div>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- TESTIMONI -->

        <div class="stories full-block">
            <div class="wrapper wrapper-title">
                <h2> Testimoni </h2>
                <br><br>
                <!--<span class="subtitle">Cerita Konsumen</span> </div>-->
                    <div class="wrapper" id="cards">
                        <div class="dynamic-row sm-triangle-row">

                        <?php foreach ($testimonial as $t): ?>

                            <!-- TESTIMONI ITEM START -->
                            <a class="fancybox-media fancybox_trigger odd_col" href="<?=$t->video?>" rel="media-gallery">
                                <span class="card" data-card-four="">
                                    <div class="cover" style="background: #fff url('<?=img_url()?>cover/<?=$t->cover?>') no-repeat;">
                                        <h2><span><?=$t->nama?></span></h2>
                                    </div>
                                    <div class="professional">
                                        <div class="avatar">
                                          <?=img('testimonial/'.$t->foto,array('width'=>'250','height'=>'250'))?>
                                        </div>
                                        <div class="clerfix"></div>
                                        <div class="stats"> </div>
                                    </div>
                                    <blockquote>
                                        <p>
                                            <?=$t->isi?>
                                        </p>
                                    </blockquote>
                                    <center>
                                        <span class="star-rating star-rating-large stars-5"> 5 reviews</span>
                                    </center>
                                    <div class="info">
                                        <p>View Testimonial</p>
                                    </div>
                                </span>
                            </a>
                            <!-- TESTIMONI ITEM END-->

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>

<!-- VIDEO -->

    <div class="pros full-block service-provider-block">
        <div class="wrapper">
            <div class="wrapper wrapper-title">
                <h2 class="pro-header"> Video Gallery </h2>
                <span class="subtitle"></span> </div>
            <div class="dynamic-row">
                <div class="main-video" style="background: #fff url(<?=img_url()?>youtube/<?=$video[0]->thumbnail?>) no-repeat center center;background-size:cover;">
                    <a class="fancybox-media fancybox_trigger" href="<?=$video[0]->link?>" rel="media-gallery">
                        <div class="play"></div>
                        <div class="info">
                            <h3><?=$video[0]->judul?></h3>
                            <p> <span class="icon-font-play"></span>Lihat Video</p>
                        </div>
                    </a>
                </div>
                <div class="video-1" style="background: #fff url(<?=img_url()?>youtube/<?=$video[1]->thumbnail?>) no-repeat center center;background-size:cover;">
                    <a class="fancybox-media fancybox_trigger" href="<?=$video[1]->link?>" rel="media-gallery">
                        <div class="play"></div>
                        <div class="info">
                            <h3><?=$video[1]->judul?></h3>
                            <p> <span class="icon-font-play"></span>Lihat Video</p>
                        </div>
                    </a>
                </div>
                <div class="video-2" style="background: #fff url(<?=img_url()?>youtube/<?=$video[2]->thumbnail?>) no-repeat center center;background-size:cover;">
                    <a class="fancybox-media fancybox_trigger" href="<?=$video[2]->link?>" rel="media-gallery">
                        <div class="play"></div>
                        <div class="info">
                            <h3><?=$video[2]->judul?></h3>
                            <p> <span class="icon-font-play"></span>Lihat Video</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php /*<!-- TERSEDIA DI KOTA -->
    <div class="states full-block">
        <div class="wrapper wrapper-title">
            <h2>Babysitterku Tersedia di Kota</h2>
        </div>
        <div class="wrapper">
            <ul>
                <li>Jakarta</li>
                <li>Bogor</li>
                <li>Depok</li>
                <li>Bandung</li>
                <li>Bekasi</li>
                <li>Tangerang</li>
                <!--<li>Palembang</li>-->
                <!--<li>Makassar</li>-->
                <!--<li>Semarang</li>-->
                <!--<li>Bali</li>-->
            </ul>
        </div>
    </div>
    </div>
*/
