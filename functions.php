<?php 

add_theme_support('post-thumbnails' );

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div class="SlideBar">',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();
}