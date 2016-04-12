<body class="primo primo-avenir primo-responsive primo-fluid box-shadow multiple-backgrounds landing-page">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <div class="glorious-header" data-section="header">
        <div class="wrapper mobile_head1">
            <div class="logo"></div>
            <div id="scroller">
                <div id="wrapper">
                    <!-- NAVBAR -->
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <div class="header-logo">
                                    <a href="<?=site_url()?>">
                                        <img alt="Babysitterku" width="200" height="35" src="<?=img_url()?>logo2.png" style="width:125px!important; margin-left:5px;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>

                    <!-- SIDEBAR -->
                    <div data-sidebar="true" class="sidebar-trigger sidebar-togglable" style="-webkit-user-select: none; touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        <a class="sidebar-toggle" href="https://www.google.com/#" style="right:6px; top:9px;">
                            <span class="sr-only">Sidebar toggle</span>
                            <label for="mobile-navigation-toggle" class="mobile-navigation-trigger"><span style="float: left; position: absolute; top: 17px; font-size: 11px; left: 2px;">Menu</span></label>
                        </a>

<!-- SIDEBAR -->
                        <div class="sidebar-wrapper sidebar-default sidebar-ready">
                            <div class="sidebar-scroller">
                                <ul class="sidebar-menu">
                                    <li class="sidebar-group"><span>Babysitterku</span>
                                        <ul class="sidebar-group-menu">
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Pesan Babysitter</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Cara Kerja</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Tentang Kami</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Lowongan</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Artikel</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">FAQ</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Syarat & Ketentuan</a></li>
                                            <li class="sidebar-item"><a href="https://www.google.com/app/id/about/">Kontak Kami</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="sidebar-swipe2" class="sidebar-swipe"></div>
                    </div>

                </div>

            </div>
        </div>

        <!-- MENU HEADER -->
        <div class="wrapper mobile_head">
            <div class="row header-row">
                <div class="header-logo">
                    <a href="<?=site_url('')?>">
                        <img width="200" height="75" src="<?=img_url()?>logo1.png" alt="Babysitterku"></a>
                </div>
                <ul class="header-navigation front-page-nav">
                    <li>
                        <a href="<?=site_url()?>#carakerja" class="gray-link" title="Cara Kerja?">Cara Kerja?</a>
                        <a href="<?=site_url('about')?>" class="gray-link" title="Tentang Kami">Tentang Kami</a>
                        <a href="<?=site_url('contact')?>" class="gray-link" title="Tentang Kami">Kontak Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <!-- TOP MENU STICKY-->
    <div class="sticky-cta invisible" sticky-header="" sticky-partner-attr="data-sticky-partner" throttle-ms="250">
        <div class="wrapper">
            <a href="<?=site_url('')?>" style="margin:0"><?=img('logo1.png',array('class'=>'logo'))?></a>
            <ul>
                <li>
                    <a href="<?=site_url('contact')?>" title="Kontak Kami">Kontak Kami</a>
                </li>
                <li>
                    <a href="<?=site_url('about')?>" title="Tentang Kami">Tentang Kami</a>
                </li>
                <li>
                    <a href="<?=site_url()?>#carakerja" title="Cara Kerja">Cara Kerja</a>
                </li>
                <li>
                    <a class="bttn blue" href="<?=site_url('babysitter')?>" title="Pesan BabySitter">Pesan Sekarang</a>
                </li>
            </ul>
        </div>
    </div>

<script>

</script>
