<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes();?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type') ?>;charset=<?php bloginfo('charset'); ?>" />
<meta name="description" content="Bán nội thất cũ với giá rẻ tại Hà Nội, chúng tôi chuyên bán nội thất gia đình, văn phòng mới qua sử dụng mới 99% và bán với giá siêu rẻ, LH " />
<meta name="keywords" content="Bán nội thất cũ ,nội thất cũ giá rẻ tại Hà Nội, ban noi that cu, noi that cu tai ha noi, chuyên bán nội thất cũ, bán nội thất giá rẻ" />
<title><?php bloginfo('name')?></title>

<link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
<link href="<?php bloginfo('template_url')?>/css/mainmenu.css" rel="stylesheet" type="text/css">

<script src="<?php bloginfo('template_url')?>/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url')?>/js/jquery.tooltip.pack.js" type="text/javascript"></script>
<script type="text/javascript">
        $(function () {
            $(".product-list li").tooltip({
                bodyHandler: function () {
                    return $(this).find(".tooltip-content").html();
                },
                showUrl: false,
                track: true
            });
        });
    </script>

<script src="<?php bloginfo('template_url')?>/js/slides.min.jquery.js" type="text/javascript"></script>

</head>
    <body>

      
      <div id="wrapper">
    <div id="wrapper1">
          <div id="top-menu">
             <?php wp_nav_menu( array('theme_location' => 'primary','menu_class' => 'menu','menu_id' => 'menu' )); ?>
      </div>
          <div id="ctl00_homeSlide1" class="homeSlide1">
        <div id="homeSlide">
              <div id="slideContent">
            <div class="slides_container">
                  <div class="slide"> <a href='#'> <img src='<?php bloginfo('template_url')?>/images/236201320527ghe-van-phong.png'
                        title=" Ghế văn phòng " width="950" height="230" alt="Ghế văn phòng"/> </a> </div>
                  <div class="slide"> <a href='#'> <img src='<?php bloginfo('template_url')?>/images/146201321917noi-that-phong-ngu.png'
                        title=" Nội thất phòng ngủ " width="950" height="230" alt="Nội thất phòng ngủ"/> </a> </div>
                  <div class="slide"> <a href='#'> <img src='<?php bloginfo('template_url')?>/images/146201317311noi-that-van-phong.png'
                        title=" Nội thất văn phòng " width="950" height="230" alt="Nội thất văn phòng"/> </a> </div>
                  <div class="slide"> <a href='#'> <img src='<?php bloginfo('template_url')?>/images/1462013174546ban-ghe-giam-doc.png'
                        title=" Bàn ghế giám đốc " width="950" height="230" alt="Bàn ghế giám đốc"/> </a> </div>
                </div>
            <div class="leftslide prev"> <a href="#">&nbsp;</a></div>
            <div class="rightslide next"> <a href="#">&nbsp;</a></div>
          </div>
              <script type="text/javascript">
    $(function () {
        $('#slideContent').slides({
            play: 5000,
            pause: 2500,
            hoverPause: true,
            animationStart: function () {
                $('.slide-caption').animate({
                    bottom: -60
                }, 100);
            },
            animationComplete: function () {
                $('.slide-caption').animate({
                    bottom: 0
                }, 200);
            },
            slidesLoaded: function () {
                $('.slide-caption').animate({
                    bottom: 0
                }, 200);
            }
        });
    });
</script> 
            </div>
      </div>
        </div>