<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function wbc_menus() {
	add_menu_page( 'WBC', 'WBC', 'manage_options', 'wbc-main', 'wbc_main', 'dashicons-tickets-alt' );
}

function wbc_main() {
	if ( !current_user_can( 'wbc_access' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
    echo '<h1>WBC Main</h1>';
	echo '<p>Lorum ipsum</p>';
	echo '</div>';
}

add_action( 'admin_menu', 'wbc_menus' );

?>