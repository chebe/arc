<?php

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: ARC WBC Plugin
Plugin URI:  https://github.com/chebe/arc
Description: Plugin for ARC WorkersBeerCompany Volunteer Management
Version:     20170415
Author:      ARC Tech Team
*/


require_once (dirname( __FILE__ ) . '/setup/setup-security.php');
require_once (dirname( __FILE__ ) . '/setup/setup-menus.php');

register_activation_hook('setup/setup-security.php','wbc_activation');
register_deactivation_hook('setup/setup-security.php','wbc_deactivation');
register_uninstall_hook('setup/setup-security.php','wbc_uninstall');

?>
