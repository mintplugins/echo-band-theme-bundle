<?php
/**
 * Custom Installation Functions for the Echo Band Theme Bundle. Make custom changes for installation here.
 *
 * Find and replace: Echo Band Theme Bundle
 * Find and replace: echo_band_theme_bundle
 * Find and replace: echo-band-theme-bundle
 * Find and replace: Echo Band
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks + Echo Band
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2017, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Returns the array of the custom theme mods for this theme. As a developer, you can get this array under "Appearance" > "Export Customizer" with the MP Stacks + Developer Add-On.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    void
 * @return   array
 */
function echo_band_theme_bundle_theme_mods(){

	return array ( 0 => false, 'nav_menu_locations' => array ( 'primary' => 3, ), 'mp_knapstack_header_bg_color' => '#2d2d2d', 'mp_knapstack_header_bg_color_opacity' => '1', 'mp_knapstack_header_bump_site_down' => true, 'mp_core_logo' => 'https://demo.mintplugins.com/echo/wp-content/uploads/sites/18/2016/05/ECHOwhite.png', 'mp_core_logo_width' => '60', 'mp_stacks_footer_stack' => '18', 'custom_css_post_id' => -1, 'mp_knapstack_header_font' => 'Lato', 'mp_knapstack_font_family' => 'Lato', );

}
add_filter( 'mp_stacks_required_theme_mods_for_' . 'echo_band_theme_bundle', 'echo_band_theme_bundle_theme_mods' );

/**
 * Return what the dirname of the theme we wish to use should be.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $theme_dir_name
 * @return   string $theme_dir_name
 */
function echo_band_theme_bundle_required_theme_dirname_custom( $theme_dir_name ){
	return 'echo-band-theme-bundle-child-theme';
}
add_filter( 'echo_band_theme_bundle_required_theme_dirname', 'echo_band_theme_bundle_required_theme_dirname_custom' );

/**
 * Return what the Fancy Name of theme we wish to use should be. This is the title in the theme's style.css file.
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param    string $fancy_theme_name
 * @return   string $fancy_theme_name
 */
function echo_band_theme_bundle_fancy_theme_name_custom( $fancy_theme_name ){
	return 'Echo Band Theme Bundle (Child Theme)';
}
add_filter( 'echo_band_theme_bundle_fancy_theme_name', 'echo_band_theme_bundle_fancy_theme_name_custom' );
