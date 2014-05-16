<?php get_header(); ?>

<div class="wrapper-body">
<?php get_sidebar();?>
  <div id="main-content">
    <div id="con-main-content">
      <div id="contenbg"> <a href="/product-category/thanh-ly-ban-ghe-van-phong/"> Thanh lý bàn ghế văn phòng </a>
      </div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
          <div class="main-box-body page-news">
            <ul class="product-list">
              <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'thanh-ly-ban-ghe-van-phong' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <li>
                <?php $postDate = get_the_date('j F Y');
				$todaysDate = date('j F Y');?>
                <h2><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="p-name">
                  <?php the_title(); ?>
                  </a></h2>
                <div class="p-img-wrapper">
                  <?php if(($todaysDate-$postDate) <= 10 ){ ?>
                  <span class="sp_moi" ><img src='<?php bloginfo("template_url")?>/images/new.gif' alt='Sản phẩm mới' /></span>
                  <?php }?>
                  <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="160px" height="160px"/>'; ?>
                  </a>
                  <?php $meta_values = get_post_meta( get_the_ID(), '_featured',true);?>
                  <?php if($meta_values=='yes'){ ?>
                  <span class="sp_Hot"><img src='<?php bloginfo("template_url")?>/images/hot.gif' alt='Sản phẩm hot' /></span>
                  <?php } ?>
                </div>
                <?php ?>
                <?php $price = get_post_meta( get_the_ID(), '_regular_price',true);
					  $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
					  ?>
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale; }?>đ</b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price; }?>đ</b></span></p>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </ul>
            <!--/.products-->
            
            <div class="clear"> </div>
          </div>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
    <div id="con-main-content">
      <div id="contenbg"> <a href="/product-category/thanh-ly-noi-that-van-phong/"> Thanh lý nội thất văn phòng </a>
      </div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
          <div class="main-box-body page-news">
            <ul class="product-list">
              <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'thanh-ly-noi-that-van-phong' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <li>
                <?php $postDate = get_the_date('j F Y');
				$todaysDate = date('j F Y');?>
                <h2><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="p-name">
                  <?php the_title(); ?>
                  </a></h2>
                <div class="p-img-wrapper">
                  <?php if(($todaysDate-$postDate) <= 10 ){ ?>
                  <span class="sp_moi" ><img src='<?php bloginfo("template_url")?>/images/new.gif' alt='Sản phẩm mới' /></span>
                  <?php }?>
                  <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="160px" height="160px"/>'; ?>
                  </a>
                  <?php $meta_values = get_post_meta( get_the_ID(), '_featured',true);?>
                  <?php if($meta_values=='yes'){ ?>
                  <span class="sp_Hot"><img src='<?php bloginfo("template_url")?>/images/hot.gif' alt='Sản phẩm hot' /></span>
                  <?php } ?>
                </div>
                <?php ?>
                <?php $price = get_post_meta( get_the_ID(), '_regular_price',true);
					  $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
					  ?>
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale; }?></b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price; }?></b></span></p>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </ul>
            <!--/.products-->
            
            <div class="clear"> </div>
          </div>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
    <div id="con-main-content">
      <div id="contenbg"> <a href="/product-category/thanh-ly-noi-that-gia-dinh/"> Thanh lý nội thất gia đình </a>
      </div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
          <div class="main-box-body page-news">
            <ul class="product-list">
              <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 6, 'product_cat' => 'thanh-ly-noi-that-gia-dinh' );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
              <li>
                <?php $postDate = get_the_date('j F Y');
				$todaysDate = date('j F Y');?>
                <h2><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>" class="p-name">
                  <?php the_title(); ?>
                  </a></h2>
                <div class="p-img-wrapper">
                  <?php if(($todaysDate-$postDate) <= 10 ){ ?>
                  <span class="sp_moi" ><img src='<?php bloginfo("template_url")?>/images/new.gif' alt='Sản phẩm mới' /></span>
                  <?php }?>
                  <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                  <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" width="160px" height="160px"/>'; ?>
                  </a>
                  <?php $meta_values = get_post_meta( get_the_ID(), '_featured',true);?>
                  <?php if($meta_values=='yes'){ ?>
                  <span class="sp_Hot"><img src='<?php bloginfo("template_url")?>/images/hot.gif' alt='Sản phẩm hot' /></span>
                  <?php } ?>
                </div>
                <?php ?>
                <?php $price = get_post_meta( get_the_ID(), '_regular_price',true);
					  $sale = get_post_meta( get_the_ID(), '_sale_price', true); 
					  ?>
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale; }?></b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price; }?></b></span></p>
              </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </ul>
            <!--/.products-->
            
            <div class="clear"> </div>
          </div>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
  </div>
  <div class="clear-both"> </div>
</div>
<?php get_footer();?>