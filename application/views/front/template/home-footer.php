<div class="support-options curtain captcha-popup" style="display: none;"></div>
<div class="redirect_curtain" id="redirect_curtain" data-curtain="active" style="display:none;"></div>
<div class="piede">
    <div class="wrapper">
        <div class="dynamic-row navigation">

            <div class="column-3">
                <div class="copyright">
                    <p>
                        <a href="<?=site_url()?>" class="logo">
                                            Babysitterku</a></p>
                    <p class="disclaimer">© Copyright 2016 Babysitterku.id</p>
                    <a href="<?=site_url('page/view/term')?>" class="last">Syarat dan Ketentuan</a>
                    <div class="social">
                        <ul class="social-media">
                            <li>
                                <a href="http://www.facebook.com/babysitterku" target="_blank">
                                    <span class="facebook"></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/babysitterku" target="_blank">
                                    <span class="twitter"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column-2 seek">
            </div>
            <div class="column-2 seek">
              <ul>
                  <li><a href="<?=site_url('about')?>">Tentang Kami</a></li>
                  <li><a href="<?=site_url('page/view/lowongan')?>">Lowongan</a></li>
                  <li><a href="<?=site_url('artikel')?>">Artikel</a></li>
                  <li><a href="<?=site_url('faq')?>">FAQ</a></li>
              </ul>
            </div>

            <div class="column-2 cus">

            </div>
            <div class="column-3">
                <ul>
                    <li class="phone-number"><b>E-mail : <?=$email?></b></li>
                    <li class="phone-number"><b>Hotline : </b></li>
                    <li class="phone-number"><b><?=$hotline1?></b></li>
                    <li class="phone-number"><b><?=$hotline2?></b></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--<div id="feedback-tab"><a data-show-feedback="" href="#">Contact Us</a></div>-->

<?=js('jquery.js')?>
<?=js('bootstrap.min.js')?>
<?=js('owl.carousel.js')?>
<?=js('jquery-ui.js')?>
<?=js('jquery.fancybox.js')?>
<?=js('jquery.fancybox-media.js')?>
<?=js('gx.sidemenu.js')?>
<?=js('iscroll.js')?>


<script type="text/javascript">

//TOP MENU

    $(window).on("scroll touchmove", function() {
        //$('#header_nav').toggleClass('tiny', $(document).scrollTop() > 0);
        //console.log('--------------------------sd'+$(document).scrollTop());
        if ($(document).scrollTop() > 300) {
            $('.sticky-cta').removeClass('invisible');
            $('.sticky-cta').addClass('visible');
        } else {
            $('.sticky-cta').removeClass('visible');
            $('.sticky-cta').addClass('invisible');

        }

    });

//OWL CAROUSEL
    var owl = $('#owl-example');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:400,
        autoplayHoverPause:true
    });


//SLIDER
    $(function(){
        $('#slide li:gt(0)').hide();
        setInterval(function(){$('#slide > :first-child').fadeOut(3000).next('li').fadeIn(3000).end().appendTo('#slide');}, 15000);
    });

// FANCYBOX

    $(function() {
        $('.fancybox-media')
            .attr('rel', 'media-gallery')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',
                arrows: false,
                helpers: {
                    media: {},
                    buttons: {}
                }
            });

        $(window).resize(function() { // fire function on resize completed
            waitForFinalEvent(function() {
                fancybox_handler();
            }, 100, "mobile_query_check");
        });

        function fancybox_handler() {
            if (mobile_query_check() == false) {
                if (!$(".fancybox_trigger").hasClass("fancybox-media")) {
                    $(".fancybox_trigger").addClass("fancybox-media");
                }
            } else {
                if ($(".fancybox_trigger").hasClass("fancybox-media")) {
                    $(".fancybox_trigger").removeClass("fancybox-media");
                }
            }
        }
        fancybox_handler();

        function mobile_query_check() {
            if (window.matchMedia('(max-width: 768px)').matches) {
                return true;
            } else {
                return false;
            }
            return;
        }
    });

</script>
</body>

</html>
