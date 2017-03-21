<?php
/**
 * This file contains a function which checks if the Band Theme Content plugin is installed.
 *
 * @since 1.0.0
 *
 * @package    MP Core
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */
 
/**
* Check to make sure the Band Theme Content Plugin is installed.
*
* @since    1.0.0
* @link     http://mintplugins.com/doc/plugin-checker-class/
* @return   array $plugins An array of plugins to be installed. This is passed in through the mp_core_check_plugins filter.
* @return   array $plugins An array of plugins to be installed. This is passed to the mp_core_check_plugins filter. (see link).
*/
if (!function_exists('band_theme_content_plugin_check')){
	function band_theme_content_plugin_check( $plugins ) {
		
		$add_plugins = array(
			array(
				'plugin_name' => 'Band Theme Content',
				'plugin_message' => __('You require the Band Theme Content plugin. Install it here.', 'echo_band_theme_bundle'),
				'plugin_filename' => 'band-theme-content.php',
				'plugin_download_link' => '',
				'plugin_info_link' => 'https://wordpress.org/plugins/band-theme-content/',
				'plugin_group_install' => true,
				'plugin_required' => true,
				'plugin_wp_repo' => true,
			)
		);
		
		return array_merge( $plugins, $add_plugins );
	}
}
add_filter( 'mp_core_check_plugins', 'band_theme_content_plugin_check' );