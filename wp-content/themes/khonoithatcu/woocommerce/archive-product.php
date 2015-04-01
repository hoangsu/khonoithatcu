<?php get_header(); ?>

<div class="wrapper-body">
  <?php get_sidebar();?>
  <div id="main-content">
    <div id="con-main-content">
      <div id="contenbg"> <?php if (is_search()) {?>
        Hiển thị
    <?php
$num_cb = $wp_query->post_count;
$id_cb = $paged;
$r_cb=1;
$startNum_cb = $r_cb;
$endNum_cb = get_option( 'posts_per_page' );
if($id_cb >=2) {
  $s_cb=$id_cb-1;
  $r_cb=($s_cb * get_option( 'posts_per_page' )) + 1;
  $startNum_cb=$r_cb;
  $endNum_cb=$startNum_cb + ($num_cb -1);
}
      global $wp_query;
if (have_posts()) :
 if($wp_query->found_posts<=get_option( 'posts_per_page' )){
     echo $wp_query->found_posts;
 }else{
     echo "<b>$startNum_cb-$endNum_cb</b>";
 }

endif;

$totaltime= number_format($load,4);

?>
    của 
  <?php
echo $wp_query->found_posts;?>
    Kết quả cho từ khóa '<?php echo strip_tags($s); ?>'
      <?php } else { single_cat_title();}?></div>
      <div class="block-tintuc-content">
        <div class="block-tintuc-trong">
                    <ul class="product-list">
                    	<?php if ( have_posts() ) : ?>

			<?php woocommerce_product_loop_start(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					 <li>
                <?php $postDate = get_the_date('j F Y');
				$todaysDate = date('j F Y');?>
                <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>" class="p-name">
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
                <p class="p-price">Giá KM: <span class="price-new"><b><?php if($sale == '') {?>Liên hệ <?php } else { echo $sale."đ"; }?></b></span></p>
                <p class="p-price">Giá cũ: <span class="price-old"><b><?php if($price == '') {?>Liên hệ <?php } else { echo $price."đ"; }?></b></span></p>
              </li>
				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>
        
           
            </ul>
          <div class="clear-left"> &nbsp;</div>
       <div class="pager">
            <div>
              <?php
global $wp_query;

$big = 999999999; // need an unlikely integer
if ( $wp_query->max_num_pages > 1 ) {?>
        <span style="border: 1px solid #ccc; padding: 5px 10px;">Trang</span><span>
<?php    } 
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
	'total' => $wp_query->max_num_pages
) );
?>
              </span></div>
          </div>
        </div>
      </div>
      <div class="block-boot-content"></div>
    </div>
  </div>
  <div class="clear-both"> </div>
</div>
<?php get_footer();?>