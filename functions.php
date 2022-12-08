<?php 
wp_enqueue_style( 'style-css', get_stylesheet_uri() );
wp_enqueue_style( 'style-boot', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
wp_enqueue_script( 'script-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );

register_sidebar(array (
    'name'=>'Top Right Logo',
    'id'=>'bdlogo',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_nav_menus( array(
    'TM'=>'Primary'
) );
// hero part 
register_sidebar(array (
    'name'=>'Hero top',
    'id'=>'herotop',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_sidebar(array (
    'name'=>'Hero Bottom Image',
    'id'=>'hbimg',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Hero Bottom body',
    'id'=>'hbbody',
    'before_widget'  =>'',
    'after_widget'   => ''
) );

register_sidebar(array (
    'name'=>'Hero Bottom Image2',
    'id'=>'hbimg2',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Hero Bottom body2',
    'id'=>'hbbody2',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_sidebar(array (
    'name'=>'Hero Bottom Image3',
    'id'=>'hbimg3',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Hero Bottom body3',
    'id'=>'hbbody3',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
// photo section 
register_sidebar(array (
    'name'=>'Photo Image-1',
    'id'=>'pimg-1',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Photo Image-1 body',
    'id'=>'pbody-1',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_sidebar(array (
    'name'=>'Photo Image-2',
    'id'=>'pimg-2',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Photo Image-2 body',
    'id'=>'pbody-2',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_sidebar(array (
    'name'=>'Photo Image-3',
    'id'=>'pimg-3',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Photo Image-3 body',
    'id'=>'pbody-3',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
register_sidebar(array (
    'name'=>'Photo Image-4',
    'id'=>'pimg-4',
    // 'before_widget'  =>'',
    // 'after_widget'   => ''
    'before_widget'  => '<div id="%1$s" class="widget %2$s hbimg1">',
	'after_widget'   => "</div>\n",
) );
register_sidebar(array (
    'name'=>'Photo Image-4 body',
    'id'=>'pbody-4',
    'before_widget'  =>'',
    'after_widget'   => ''
) );
?>