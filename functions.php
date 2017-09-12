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

/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

function DiasQueFaltan(){

	// Recursos 
	$arrayName = array(
		'MesActual'		=> date('n'),
		'MesDelA' 		=> 12,
		'DiasDelMes' 	=> 31,
		'DiaActual'		=> date('j')
	 );

	if ($arrayName['MesActual'] == 12) {

		// Estamos en DICIEMBRE
		if ($arrayName['DiaActual'] == 27) {
			echo "Todo listo para el Grito del Mono.";
		}elseif ($arrayName['DiaActual'] == 28){
			echo "Te esperamos para Bailar Monoooo 28.";
		}elseif ($arrayName['DiaActual'] == 29 and $arrayName['DiaActual'] == 30  ){
			echo "Muchas Gracias por visitarnos, no olvides compartir las fotos con nosotros";
		}elseif ($arrayName['DiaActual'] == 31){
			echo "Toda la Familia de Canamelar les desea Feliz año y un prospero año nuevo";
		}else{
			$DiasFaltante=$arrayName['DiasDelMes']-$arrayName['DiaActual'];
			echo "Faltan ".$DiasFaltante." Para Bailar Moooonoo 28";

		}

	}else{
		$MesesQueFaltan= $arrayName['MesDelA']-$arrayName['MesActual']; // Dias que faltan
		echo "Faltan ".$MesesQueFaltan." meses para el Baile de Mono 28";

	}

} 