<body>
  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" rule="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="cullapse" data-target=".navbar-cullapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?=site_url('')?>">
              <?=img('logosamping.png',array('height'=>'60px','style'=>'padding:10px'))?>
            </a>
        </div>
        <!-- /.navbar-header -->

<!--sidebar-->
        <div class="navbar-default sidebar" rule="navigation">
            <div class="sidebar-nav navbar-cullapse">
                <ul class="nav" id="side-menu">
                  <li> <!-- Order -->
                    <a href="<?=site_url('/admin/order_babysitter')?>"><i class="fa fa-envelope fa-fw"></i> Order </a>
                  </li>

                  <li> <!-- Data -->
                    <a href="#"><!--<i class="fa fa-database fa-fw"></i>--> Data </a>
                    <ul class='nav nav-second-level'>
                      <li><a href="<?=site_url('/admin/babysitter')?>"><i class="fa fa-users fa-fw"></i> Babysitter</a></li>
                      <li><a href="<?=site_url('/admin/provinsi')?>"><i class="fa fa-globe fa-map fa-fw"></i> Provinsi</a></li>
                      <li><a href="<?=site_url('/admin/kota')?>"><i class="fa fa-building fa-fw"></i> Kota</a></li>
                    </ul>
                  </li>

                  <li> <!-- Web -->
                    <a href="#"><!--<i class="fa fa-globe fa-fw"></i>--> Web </a>
                    <ul class='nav nav-second-level'>
                      <li><a href="<?=site_url('/admin/artikel')?>"><i class="fa fa-pencil fa-fw"></i> Artikel</a></li>
                      <li><a href="<?=site_url('/admin/diliput')?>"><i class="fa fa-newspaper-o fa-fw"></i> Liputan</a></li>
                      <li><a href="<?=site_url('/admin/faq')?>"><i class="fa fa-question-circle fa-fw"></i> FAQ</a></li>
                      <li><a href="<?=site_url('/admin/carakerja')?>"><i class="fa fa-wrench fa-fw"></i> Cara Kerja</a></li>
                      <li><a href="<?=site_url('/admin/kenapa')?>"><i class="fa fa-question fa-fw"></i> Kenapa</a></li>
                      <li><a href="<?=site_url('/admin/kontak')?>"><i class="fa fa-phone fa-fw"></i> Kontak</a></li>
                      <li><a href="<?=site_url('/admin/lamaran')?>"><i class="fa fa-briefcase fa-fw"></i> Lamaran</a></li>
                      <li><a href="<?=site_url('/admin/page')?>"><i class="fa fa-pencil-square-o fa-fw"></i> Page</a></li>
                      <li><a href="<?=site_url('/admin/slide')?>"><i class="fa fa-caret-square-o-right fa-fw"></i> Slide</a></li>
                      <li><a href="<?=site_url('/admin/testimonial')?>"><i class="fa fa-comment fa-fw"></i> Testimonial</a></li>
                      <li><a href="<?=site_url('/admin/tim')?>"><i class="fa fa-users fa-fw"></i> Tim</a></li>
                      <li><a href="<?=site_url('/admin/gallery')?>"><i class="fa fa-youtube fa-fw"></i>Video</a></li>
                    </ul>
                  </li>

                  <li>
                      <a href="<?=site_url('/admin/login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                  </li>
                </ul>
            </div>
            <!-- /.sidebar-cullapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
