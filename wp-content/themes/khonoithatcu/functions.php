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
		'name'=>'Home Right Slider',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Home Meltwater Sector News',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Home right sidebar',
		'before_widget' => '<div class="home_right_sidebar">',
		'after_widget' => '</div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'News listing left sidebar',
		'before_widget' => '<div class="sidebar_block">',
		'after_widget' => '</div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'CTA left sidebar',
		'before_widget' => '<div class="cta_button">',
		'after_widget' => '</div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Subcategories left sidebar',
		'before_widget' => '<div class="sidebar_block">',
		'after_widget' => '</div>'
	));
	};
if(function_exists('register_sidebar')){
	register_sidebar(array(
		'name'=>'Subcategories mobile',
		'before_widget' => '',
		'after_widget' => ''
	));
	};
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function custom_excerpt_length( $length ) {
	return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

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
function my_wpcf7_form_elements($html) {
	$text = '- Select type of enquiry -';
	$html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
	return $html;
}
add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');
register_taxonomy('states', 'post',  array(
    'hierarchical' => true, 'label' => 'All States',
    'query_var' =>  true, 'rewrite' => true));
register_taxonomy('mem_categories', 'post',  array(
	'hierarchical' => true, 'label' => 'All Research Fields',
	'query_var' =>  true, 'rewrite' => true));

?>