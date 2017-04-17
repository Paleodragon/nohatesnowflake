<?php
function popper_child_setup() {
// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'secondary' => esc_html__( 'Footer Menu', 'popper' ),
	) );
}
add_action( 'after_setup_theme', 'popper_child_setup');
?>

