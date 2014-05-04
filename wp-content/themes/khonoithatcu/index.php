<?php get_header(); ?>
    <div class="wrapper-body">
          <div id="right-content">
          <div id="hot-news">
                    <div class="hot-news-header">
                        Thanh lý nội thất
                    </div>
                    <div class="right-block-body">
                    <div class="right-trong-body">
                        <div class="news-list">
                         <?php wp_nav_menu( array('theme_location' => 'left','menu_class' => 'left-menu')); ?>
                        </div>
                        </div>
                    </div>
                     <div class="right-block-bottom">
                    </div>
                </div>

          	<?php dynamic_sidebar( 'Left Sidebar' ); ?>
          </div>
          <div id="main-content">
        <div id="con-main-content">
              <div id="contenbg"> <a href="http://www.bannoithatcu.vn/tl/39/thanh-ly-ban-van-phong.html"> Thanh lý bàn ghế văn phòng </a>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptHotCategories$ctl00$hfId" id="ctl00_ContentPlaceHolder1_rptHotCategories_ctl00_hfId" value="39" />
          </div>
              <div class="block-tintuc-content">
            <div class="block-tintuc-trong">
                  <div class="main-box-body page-news">
                    <ul class="product-list">
    <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'thanh-ly-ban-ghe-van-phong', 'orderby' => 'rand' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
    <li>
                    <h2><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="p-name"><?php the_title(); ?></a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='<?php bloginfo("template_url")?>/images/new.gif' alt='Sản phẩm mới' /></span><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                     <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="160px" height="160px"/>'; ?>
                    </a> 
                     <span class="sp_Hot"><img src='<?php bloginfo("template_url")?>/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b><?php echo $product->get_price_html(); ?></b></span></p>
                  
                  </li>
                

    <?php endwhile; ?>
    <?php wp_reset_query(); ?>
</ul><!--/.products-->
            
                <div class="clear"> </div>
              </div>
                </div>
          </div>
              <div class="block-boot-content"></div>
            </div>
        <div id="con-main-content">
              <div id="contenbg"> <a href="http://www.bannoithatcu.vn/tl/43/thanh-ly-tu-van-phong.html"> Thanh lý tủ văn phòng </a>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptHotCategories$ctl01$hfId" id="ctl00_ContentPlaceHolder1_rptHotCategories_ctl01_hfId" value="43" />
          </div>
              <div class="block-tintuc-content">
            <div class="block-tintuc-trong">
                  <div class="main-box-body page-news">
                <ul class="product-list">
                      <li>
                    <h2><a title="Thanh lý tủ tài liệu gỗ SV1960KG" href='/b/179/thanh-ly-tu-tai-lieu-go-sv1960kg.html'class="p-name">Thanh lý tủ tài liệu gỗ SV1960KG</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ tài liệu gỗ SV1960KG" href='/b/179/thanh-ly-tu-tai-lieu-go-sv1960kg.html'> <img alt='Thanh lý tủ tài liệu gỗ SV1960KG' src="http://www.bannoithatcu.vn/images/sanpham/244201412216thanh-ly-tu-tai-lieu-go-sv1960kg.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>2.222.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ thấp SV802D" href='/b/171/thanh-ly-tu-thap-sv802d.html'class="p-name">Thanh lý tủ thấp SV802D</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ thấp SV802D" href='/b/171/thanh-ly-tu-thap-sv802d.html'> <img alt='Thanh lý tủ thấp SV802D' src="http://www.bannoithatcu.vn/images/sanpham/154201414834thanh-ly-tu-thap-sv802d.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>993.300 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ tài liệu giám đốc 3 cánh" href='/b/158/thanh-ly-tu-tai-lieu-giam-doc-3-canh.html'class="p-name">Thanh lý tủ tài liệu giám đốc 3 cánh</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ tài liệu giám đốc 3 cánh" href='/b/158/thanh-ly-tu-tai-lieu-giam-doc-3-canh.html'> <img alt='Thanh lý tủ tài liệu giám đốc 3 cánh' src="http://www.bannoithatcu.vn/images/sanpham/94201412448thanh-ly-tu-tai-lieu-giam-doc-3-canh.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý Tủ tài liệu SM8550H MB" href='/b/157/thanh-ly-tu-tai-lieu-sm8550h-mb.html'class="p-name">Thanh lý Tủ tài liệu SM8550H MB</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý Tủ tài liệu SM8550H MB" href='/b/157/thanh-ly-tu-tai-lieu-sm8550h-mb.html'> <img alt='Thanh lý Tủ tài liệu SM8550H MB' src="http://www.bannoithatcu.vn/images/sanpham/742014201753thanh-ly-tu-tai-lieu-sm8550h-mb.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>4.162.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ tài liệu thấp 4 cánh" href='/b/151/thanh-ly-tu-tai-lieu-thap-4-canh.html'class="p-name">Thanh lý tủ tài liệu thấp 4 cánh</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ tài liệu thấp 4 cánh" href='/b/151/thanh-ly-tu-tai-lieu-thap-4-canh.html'> <img alt='Thanh lý tủ tài liệu thấp 4 cánh' src="http://www.bannoithatcu.vn/images/sanpham/3032014194429thanh-ly-tu-tai-lieu-thap-4-canh.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ gỗ nhập khẩu" href='/b/142/thanh-ly-tu-go-nhap-khau.html'class="p-name">Thanh lý tủ gỗ nhập khẩu</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ gỗ nhập khẩu" href='/b/142/thanh-ly-tu-go-nhap-khau.html'> <img alt='Thanh lý tủ gỗ nhập khẩu' src="http://www.bannoithatcu.vn/images/sanpham/2332014193337thanh-ly-tu-go-nhap-khau.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>3.200.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ văn phòng Fami SM8050H" href='/b/107/thanh-ly-tu-van-phong-fami-sm8050h.html'class="p-name">Thanh lý tủ văn phòng Fami SM8050H</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý tủ văn phòng Fami SM8050H" href='/b/107/thanh-ly-tu-van-phong-fami-sm8050h.html'> <img alt='Thanh lý tủ văn phòng Fami SM8050H' src="http://www.bannoithatcu.vn/images/sanpham/1322014212711thanh-ly-tu-van-phong-fami-sm8050h.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>1.766.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý Tủ Tài Liệu FAMI SM8350H" href='/b/54/thanh-ly-tu-tai-lieu-fami-sm8350h.html'class="p-name">Thanh lý Tủ Tài Liệu FAMI SM8350H</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý Tủ Tài Liệu FAMI SM8350H" href='/b/54/thanh-ly-tu-tai-lieu-fami-sm8350h.html'> <img alt='Thanh lý Tủ Tài Liệu FAMI SM8350H' src="http://www.bannoithatcu.vn/images/sanpham/22820137361tu-tai-lieu-fami-sm8350h-mb-500x500.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>3.302.000 </b></span></p>
                  </li>
                    </ul>
                <div class="clear"> </div>
              </div>
                </div>
          </div>
              <div class="block-boot-content"></div>
            </div>
        <div id="con-main-content">
              <div id="contenbg"> <a href="http://www.bannoithatcu.vn/tl/37/thanh-ly-noi-that-van-phong.html"> Thanh lý nội thất văn phòng </a>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptHotCategories$ctl02$hfId" id="ctl00_ContentPlaceHolder1_rptHotCategories_ctl02_hfId" value="37" />
          </div>
              <div class="block-tintuc-content">
            <div class="block-tintuc-trong">
                  <div class="main-box-body page-news">
                <ul class="product-list">
                      <li>
                    <h2><a title="Thanh lý bàn giám đốc hòa phát" href='/b/169/thanh-ly-ban-giam-doc-hoa-phat.html'class="p-name">Thanh lý bàn giám đốc hòa phát</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý bàn giám đốc hòa phát" href='/b/169/thanh-ly-ban-giam-doc-hoa-phat.html'> <img alt='Thanh lý bàn giám đốc hòa phát' src="http://www.bannoithatcu.vn/images/sanpham/1542014135754thanh-ly-ban-giam-doc-hoa-phat.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>3.400.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý bàn giám đốc và bàn phụ" href='/b/168/thanh-ly-ban-giam-doc-va-ban-phu.html'class="p-name">Thanh lý bàn giám đốc và bàn phụ</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý bàn giám đốc và bàn phụ" href='/b/168/thanh-ly-ban-giam-doc-va-ban-phu.html'> <img alt='Thanh lý bàn giám đốc và bàn phụ' src="http://www.bannoithatcu.vn/images/sanpham/1442014213242thanh-ly-ban-giam-doc-va-ban-phu.png" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý tủ thấp 6 cánh" href='/b/148/thanh-ly-tu-thap-6-canh.html'class="p-name">Thanh lý tủ thấp 6 cánh</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý tủ thấp 6 cánh" href='/b/148/thanh-ly-tu-thap-6-canh.html'> <img alt='Thanh lý tủ thấp 6 cánh' src="http://www.bannoithatcu.vn/images/sanpham/2932014213432thanh-ly-tu-thap-6-canh.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý bàn tròn chân Inox" href='/b/140/thanh-ly-ban-tron-chan-inox.html'class="p-name">Thanh lý bàn tròn chân Inox</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý bàn tròn chân Inox" href='/b/140/thanh-ly-ban-tron-chan-inox.html'> <img alt='Thanh lý bàn tròn chân Inox' src="http://www.bannoithatcu.vn/images/sanpham/2332014192729thanh-ly-ban-tron-chan-inox.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>820.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý rèm văn phòng" href='/b/137/thanh-ly-rem-van-phong.html'class="p-name">Thanh lý rèm văn phòng</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý rèm văn phòng" href='/b/137/thanh-ly-rem-van-phong.html'> <img alt='Thanh lý rèm văn phòng,thanh-ly-rem-van-phong' src="http://www.bannoithatcu.vn/images/sanpham/2132014113613thanh-ly-rem-van-phong.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý kệ để giầy cho văn phòng" href='/b/136/thanh-ly-ke-de-giay-cho-van-phong.html'class="p-name">Thanh lý kệ để giầy cho văn phòng</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý kệ để giầy cho văn phòng" href='/b/136/thanh-ly-ke-de-giay-cho-van-phong.html'> <img alt='Thanh lý kệ để giầy cho văn phòng' src="http://www.bannoithatcu.vn/images/sanpham/173201415289thanh-ly-ke-de-giay-cho-van-phong.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>1.120.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý cây nước Kangaroo" href='/b/133/thanh-ly-cay-nuoc-kangaroo.html'class="p-name">Thanh lý cây nước Kangaroo</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý cây nước Kangaroo" href='/b/133/thanh-ly-cay-nuoc-kangaroo.html'> <img alt='Thanh lý cây nước Kangaroo' src="http://www.bannoithatcu.vn/images/sanpham/1432014204549thanh-ly-cay-nuoc-kangaroo.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý cửa kính khung nhôm" href='/b/119/thanh-ly-cua-kinh-khung-nhom.html'class="p-name">Thanh lý cửa kính khung nhôm</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý cửa kính khung nhôm" href='/b/119/thanh-ly-cua-kinh-khung-nhom.html'> <img alt='Thanh lý cửa kính khung nhôm' src="http://www.bannoithatcu.vn/images/sanpham/1320149710thanh-ly-cua-kinh-khung-nhom.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                    </ul>
                <div class="clear"> </div>
              </div>
                </div>
          </div>
              <div class="block-boot-content"></div>
            </div>
        <div id="con-main-content">
              <div id="contenbg"> <a href="http://www.bannoithatcu.vn/tl/50/thanh-ly-thiet-bi-van-phong.html"> Thanh lý thiết bị văn phòng </a>
            <input type="hidden" name="ctl00$ContentPlaceHolder1$rptHotCategories$ctl03$hfId" id="ctl00_ContentPlaceHolder1_rptHotCategories_ctl03_hfId" value="50" />
          </div>
              <div class="block-tintuc-content">
            <div class="block-tintuc-trong">
                  <div class="main-box-body page-news">
                <ul class="product-list">
                      <li>
                    <h2><a title="Thanh lý máy in đa chức năng HP LaserJet M2727nF" href='/b/173/thanh-ly-may-in-da-chuc-nang-hp-laserjet-m2727nf.html'class="p-name">Thanh lý máy in đa chức năng HP LaserJet M2727nF</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ><img src='/Skins/Default/images/new.gif' alt='Sản phẩm mới' /></span> <a title="Thanh lý máy in đa chức năng HP LaserJet M2727nF" href='/b/173/thanh-ly-may-in-da-chuc-nang-hp-laserjet-m2727nf.html'> <img alt='Thanh lý máy in đa chức năng HP LaserJet M2727nF' src="http://www.bannoithatcu.vn/images/sanpham/194201419485thanh-ly-may-in-da-chuc-nang-hp-laserjet-m2727nf.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>15.884.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý máy hủy tài liệu ERYUN RS-5081C" href='/b/161/thanh-ly-may-huy-tai-lieu-eryun-rs5081c.html'class="p-name">Thanh lý máy hủy tài liệu ERYUN RS-5081C</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý máy hủy tài liệu ERYUN RS-5081C" href='/b/161/thanh-ly-may-huy-tai-lieu-eryun-rs5081c.html'> <img alt='Thanh lý máy hủy tài liệu ERYUN RS-5081C' src="http://www.bannoithatcu.vn/images/sanpham/942014183038thanh-ly-may-huy-tai-lieu-eryun-rs5081c.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>4.700.000 </b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý máy photocopy Xerox Document Center 156" href='/b/159/thanh-ly-may-photocopy-xerox-document-center-156.html'class="p-name">Thanh lý máy photocopy Xerox Document Center 156</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý máy photocopy Xerox Document Center 156" href='/b/159/thanh-ly-may-photocopy-xerox-document-center-156.html'> <img alt='Thanh lý máy photocopy Xerox Document Center 156' src="http://www.bannoithatcu.vn/images/sanpham/942014121133thanh-ly-may-photocopy-xerox-document-center-156.png" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>Liên hệ</b></span></p>
                  </li>
                      <li>
                    <h2><a title="Thanh lý máy Scan HP ScanJet G2410" href='/b/134/thanh-ly-may-scan-hp-scanjet-g2410.html'class="p-name">Thanh lý máy Scan HP ScanJet G2410</a></h2>
                    <div class="p-img-wrapper"> <span class="sp_moi" ></span> <a title="Thanh lý máy Scan HP ScanJet G2410" href='/b/134/thanh-ly-may-scan-hp-scanjet-g2410.html'> <img alt='Thanh lý máy Scan HP ScanJet G2410' src="http://www.bannoithatcu.vn/images/sanpham/1432014212736thanh-ly-may-scan-hp-scanjet-g2410.jpg" /> </a> <span class="sp_Hot"><img src='/Skins/Default/images/hot.gif' alt='Sản phẩm hot' /></span> </div>
                    <p class="p-price">Giá KM: <span class="price-new"><b>Liên hệ</b></span></p>
                    <p class="p-price">Giá cũ: <span class="price-old"><b>1.750.000 </b></span></p>
                  </li>
                    </ul>
                <div class="clear"> </div>
              </div>
                </div>
          </div>
              <div class="block-boot-content"></div>
            </div>
        <div id="contenbg">
              <h1>Bán nội thất cũ, thanh ly noi that cu</h1>
            </div>
        <div class="block-tintuc-content">
              <div class="block-tintuc-trong">
            <div class="news-list1">
                  <ul>
                <li> <a title="Mua thanh lý nội thất văn phòng" class="news-title1" href='/DV/40/mua-thanh-ly-noi-that-van-phong.html'><img title="Mua thanh lý nội thất văn phòng" src='/images/tintuc/1372013154957mua-thanh-ly-noi-that-van-phong.jpg'
                        alt='Mua thanh lý nội thất văn phòng' /></a>
                      <h2><a title="Mua thanh lý nội thất văn phòng" class="news-title1" href='/DV/40/mua-thanh-ly-noi-that-van-phong.html'> Mua thanh lý nội thất văn phòng</a></h2>
                      <div class="news-desc1"> Công Ty TNHH Phát Triển Công Nghệ Vững Bước Tương lai là công ty hoạt động trong nhiều lĩnh vực trong đó có lĩnh vực mua thanh lý nội thất văn phòng với giá cao. Công ty chúng tôi chuyên mua thanh lý những loại sau: Bàn nhân viên,bàn văn phòng, bàn g... </div>
                      <a title="Mua thanh lý nội thất văn phòng"  class="view-details1" href='/DV/40/mua-thanh-ly-noi-that-van-phong.html'> Xem chi tiết...</a>
                      <div class="article_seperator"> &nbsp;</div>
                    </li>
                <li> <a title="Mua thanh lý bàn ghế văn phòng" class="news-title1" href='/DV/41/mua-thanh-ly-ban-ghe-van-phong.html'><img title="Mua thanh lý bàn ghế văn phòng" src='/images/tintuc/1472013162927mua-thanh-ly-ban-ghe-van-phong.jpg'
                        alt='Mua thanh lý bàn ghế văn phòng' /></a>
                      <h2><a title="Mua thanh lý bàn ghế văn phòng" class="news-title1" href='/DV/41/mua-thanh-ly-ban-ghe-van-phong.html'> Mua thanh lý bàn ghế văn phòng</a></h2>
                      <div class="news-desc1"> Trong thời buổi xã hội, kinh tế đi xuống như thế này nhiều công ty chuyển văn phòng hay giải thể. Câu hỏi đặt ra là vậy làm sao để thanh lý được những bàn ghế văn phòng cũ mà không phải vứt đi cho đỡ phí? Hày đến với công ty chúng tôi. Chúng tôi chuy... </div>
                      <a title="Mua thanh lý bàn ghế văn phòng"  class="view-details1" href='/DV/41/mua-thanh-ly-ban-ghe-van-phong.html'> Xem chi tiết...</a>
                      <div class="article_seperator"> &nbsp;</div>
                    </li>
                <li> <a title="Mua thanh lý bàn ghế giám đốc" class="news-title1" href='/DV/42/mua-thanh-ly-ban-ghe-giam-doc.html'><img title="Mua thanh lý bàn ghế giám đốc" src='/images/tintuc/15720130314mua-thanh-ly-ban-ghe-giam-doc.jpg'
                        alt='Mua thanh lý bàn ghế giám đốc' /></a>
                      <h2><a title="Mua thanh lý bàn ghế giám đốc" class="news-title1" href='/DV/42/mua-thanh-ly-ban-ghe-giam-doc.html'> Mua thanh lý bàn ghế giám đốc</a></h2>
                      <div class="news-desc1"> Trong thời buổi kinh tế khó khăn như hiện nay, không phải gia đình nào cũng có đủ thu nhập để mua những bộ nội thất đẹp và sang trọng. Thay vào việc bỏ ra một món tiền lớn để mua sắm nội thất mới, nhiều gia đình đã nghĩ đến những sản phẩm nội thất cũ... </div>
                      <a title="Mua thanh lý bàn ghế giám đốc"  class="view-details1" href='/DV/42/mua-thanh-ly-ban-ghe-giam-doc.html'> Xem chi tiết...</a>
                      <div class="article_seperator"> &nbsp;</div>
                    </li>
              </ul>
                </div>
          </div>
            </div>
        <div class="block-boot-content"></div>
      </div>
          <div class="clear-both"> </div>
        </div>
  </div>
      <div id="footer1">
    <div id="footer">
          <table border="0" cellpadding="5" cellspacing="5">
        <tbody>
              <tr>
            <td class="contact-info"><div align="center"><font size="2"><strong><font size="2">C&ocirc;ng Ty TNHH Ph&aacute;t Triển C&ocirc;ng Nghệ Vững Bước Tương lai</font>&nbsp; </strong><br />
                Địa chỉ: Số 14 Ng&aacute;ch 177/44  - Định C&ocirc;ng - Ho&agrave;ng Mai - H&agrave; Nội <br />
                Email : </font><font size="2"><span class="gbps2">bannoithatcu@gmail.com</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Hotline : 0989.283.268&nbsp; -&nbsp; 04.629.32.32.2 <a rel="author" href="https://plus.google.com/u/0/105809411126122127147">Google</a> | <a rel="author" href="https://plus.google.com/u/0/b/117267782248662230499/+BannoithatcuVn/">Thanh lý bàn ghế</a><br />
                <br />
                </font></div></td>
          </tr>
            </tbody>
      </table>
        </div>
    <!--end #footer--> 
    
  </div>

</body>
    </html>
