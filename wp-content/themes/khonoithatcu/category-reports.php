<?php /*
Template Name: Publications category page
*/
 ?>
<?php get_header(); ?>
<div id="content" class="reports_listing">
<div class="inner">
<h1 class="title"> <?php single_cat_title('',true); ?></h1>
 <div class="category_description">
 	<?php echo category_description(); ?> 
 </div>
  <div class="list_article">
    <ul>
       <?php $arr = array();?>
      <?php if(have_posts()) : while(have_posts()) : the_post();  ?>
      <li <?php if(!in_array(get_the_time('Y'),$arr)){echo "class='year'";} ?>>
      <div class="year_reports"><?php if(!in_array(get_the_time('Y'),$arr)){ echo '<h1>'.get_the_time('Y').'</h1>';array_push($arr,get_the_time('Y'));}?></h1></div>
      <div class="article_content">
      <div class="img_content">
        <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail('thumbnail') ?></a>
        <div class="flowhidden">
          <h3><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">
            <?php the_title();?></a>
          </h3>
          <span class="date"><?php the_time('j F, Y');?> </span>
          <div class="shortdes"><?php the_excerpt(); ?></div>
          <a class="readmore" href="<?php the_permalink();?>">Read more</a> 
          </div>
          </div>

 <?php         
$summary = get_field('summary');
$summarySize = size_format(filesize( get_attached_file( $summary['id'] ) ));

$report = get_field('full_report');
$reportSize = size_format(filesize( get_attached_file( $report['id'] ) ));

?>
  <div class="file_attach">
    <?php if($summary) {?>
    <p>
      <a href="<?php echo $summary['url'] ?>"><span class="img_file"><img src="<?php bloginfo('template_url')?>/images/file_m.png"/></span>
         <span class="flowhidden_file">
          <span class="title_file">Summary</span><br>
          <span class="size_file"><?php echo $summarySize;?></span>
           </span>
         </a></p>
         <?php }?>
    <?php if($report) {?>
      <p><a href="<?php echo $report['url'] ?>"><span class="img_file"><img src="<?php bloginfo('template_url')?>/images/file_m.png"/></span>
         <span class="flowhidden_file">
          <span class="title_file">Full Report</span><br>
          <span class="size_file"><?php echo $reportSize;?></span>
           </span>
         </a></p>
         <?php }?>
  </div>


     
       </div>
      </li>
       <?php endwhile; ?>
    </ul>
     
    <?php else : ?>
    <p> There are no posts to display !</p>
    <?php endif; ?>
  
  </div>
    <div class="clear"></div>
   <div class="paging"> 
 <?php if(function_exists('tw_pagination')) 
    tw_pagination();
?>
    </div>
       <div class="paging mobile">
          <?php if(function_exists('tw_pagination'))
          tw_pagination_mobile();
          ?>
    </div>
   <div class="clear btop"> <a href="#header" class="backtotop">top</a></div>
   </div>
</div>
<!-- /.container -->

<?php get_footer(); ?>
