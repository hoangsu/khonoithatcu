<?php 
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );
add_image_size( 'member-thumb-grid', 312, 219, true );
add_image_size( 'member-thumb-list', 155, 67, true ); 
add_image_size( 'category-thumb-list', 247, 215, true ); 

register_nav_menus(array(
		'primary' => 'Main Menu',
		'left' => 'Left Menu'
	));

if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Left Sidebar',
		'before_title' => '<div class="hot-news-header">',
		'after_title' => '</div>',
		'before_widget' => '<div id="thongke12">',
		'after_widget' => '<div class="right-block-bottom"></div></div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Footer',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'List all products',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//function custom_excerpt_length( $length ) {
	//return 30;
//}
//add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );

		if ( $excut < 0 ) {
			echo trim(mb_substr( $subex, 0, $excut ));
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $excerpt;
	}
}
?>
