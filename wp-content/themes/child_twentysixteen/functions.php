<? php
//function wpb_add_google_fonts() {
	
	//wp_enqueue_style('wpb-google-fonts','https://fonts.googlwapis.com/css?family=BioRhyme+Expanded', false );
//}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts');
}
function my_theme_enqueue_styles() {

	$parent_style = 'twentysixteen-style'; 

	wp_enqueue_style( $parent_style, get_template_directroty_uri(). '/styles.css');
	wp_enqueue_style('child-style', get'_stylesheet_directry_uri(). '/styles.css', array( $parent_style), wp_get_theme()-->get('Version')
	 );
}

add_action( 'wp_enqueue_scripts' , 'my_theme_enqueue_styles');
?>