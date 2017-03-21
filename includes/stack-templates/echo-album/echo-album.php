<?php 
/**
 * MP Stacks Template Album
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Album
 * @subpackage  Functions
 *
 * @copyright   Copyright (c) 2016, Mint Plugins
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author      Philip Johnston
 */

 /**
 * If required add-ons aren't active, stop and install it now
 */
if (!function_exists('mp_stacks_embedsgrid_textdomain') || !function_exists('mp_stacks_eventgrid_textdomain') || !function_exists('mp_stacks_googlefonts_textdomain') || !function_exists('mp_stacks_linkgrid_textdomain') || !function_exists('mp_stacks_parallax_textdomain') || !function_exists('mp_stacks_socialgrid_textdomain') || !function_exists('mp_stacks_sociallinks_textdomain') || !function_exists('mp_stacks_woogrid_textdomain')){
					
	/**
	 * Check if mp_stacks_embedsgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-embedsgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_eventgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-eventgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_googlefonts is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-googlefonts-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_linkgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-linkgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_parallax is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-parallax-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_socialgrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-socialgrid-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_sociallinks is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-sociallinks-check.php' ); 
		
	
					
	/**
	 * Check if mp_stacks_woogrid is installed
	 */
	require( plugin_dir_path(__FILE__) . 'required-add-ons/mp-stacks-woogrid-check.php' ); 
		
		
}
/**
 * Otherwise, if all required plugins are active, carry out the plugin's functions
 */
else{

	 /**
	 * Add Album to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_echo_album
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_echo_album( $installed_templates ){ 
		
		$installed_templates['mp_stacks_echo_album_array'] = array(
			'template_slug' => 'echo_album',
			'template_title' => __( 'Album', 'echo_band_theme_bundle' ),
			'template_description' => __('Created using: Echo Band Theme Bundle\'s "Album" Stack', 'echo_band_theme_bundle' ),
			'template_tags' => 'Album, Echo ',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/echo/recollection/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_echo_album' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_echo_album_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_echo_album_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['page']['echo_album'] = array( 'title' => 'Album','add_to_primary_menu' => 'true', );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'echo_band_theme_bundle_default_stacks', 'mp_stacks_templates_echo_album_to_default_stacks' );
	
	/**
	 * This function holds and returns the Album Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_echo_album_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Echo Band Theme Bundle\'s "Album" Stack',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Header',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1463599558:6',
      ),
      '_edit_last' => 
      array (
        'value' => '6',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_image' => 
      array (
        'value' => 'ALBUMCOVERnotext.jpg',
        'attachment' => true,
      ),
      'brick_display_type' => 
      array (
        'value' => 'fill',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '55',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Lato',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '700',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p&gt;REC·OL·LEC·TION&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '13',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '300',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '500',
      ),
      'mp_stacks_parallax_on' => 
      array (
        'value' => 'mp_stacks_parallax_on',
      ),
      'mp_stacks_parallax_bg_offset' => 
      array (
        'value' => '-100',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'image',
      ),
      'brick_main_image' => 
      array (
        'value' => 'PlaybuttonAI.png',
        'attachment' => true,
      ),
      'brick_main_image_link_url' => 
      array (
        'value' => '#music-player',
      ),
      'brick_main_image_open_type' => 
      array (
        'value' => 'parent',
      ),
      'brick_main_image_max_width' => 
      array (
        'value' => '100',
      ),
    ),
    'brick_2' => 
    array (
      'brick_title' => 'Music Player',
      'mp_stack_order' => 1010,
      '_edit_lock' => 
      array (
        'value' => '1464746084:6',
      ),
      '_edit_last' => 
      array (
        'value' => '6',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'image',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'embedsgrid',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#36393a',
      ),
      'brick_main_image' => 
      array (
        'value' => 'ALBUMCOVER.jpg',
        'attachment' => true,
      ),
      'brick_video_url' => 
      array (
        'value' => '&lt;iframe src=&quot;https://embed.spotify.com/?uri=spotify%3Aalbum%3A2mD97VgxTRfwB8F5tvkwrL&quot; width=&quot;300&quot; height=&quot;380&quot; frameborder=&quot;0&quot; allowtransparency=&quot;true&quot;&gt;&lt;/iframe&gt;',
      ),
      'mp_stack_id' => 
      array (
        'value' => '13',
      ),
      'brick_alignment' => 
      array (
        'value' => 'leftright',
      ),
      'embedsgrid_embeds_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'embedsgrid_embed_code' => 
            array (
              'value' => '&lt;iframe src=&quot;https://embed.spotify.com/?uri=spotify%3Aalbum%3A2mD97VgxTRfwB8F5tvkwrL&quot; width=&quot;100%&quot; height=&quot;380&quot; frameborder=&quot;0&quot; allowtransparency=&quot;true&quot;&gt;&lt;/iframe&gt;',
              'attachment' => false,
            ),
            'embedsgrid_embed_code_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'embedsgrid_embed_code_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_masonry' => 
      array (
        'value' => '',
      ),
      'embedsgrid_title_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_description_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_description_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'embedsgrid_description_animation_repeater_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_per_row' => 
      array (
        'value' => '1',
      ),
      'embedsgrid_per_page' => 
      array (
        'value' => '1',
      ),
      'embedsgrid_post_spacing' => 
      array (
        'value' => '0',
      ),
    ),
    'brick_3' => 
    array (
      'brick_title' => 'Info',
      'mp_stack_order' => 1020,
      '_edit_lock' => 
      array (
        'value' => '1463514189:6',
      ),
      'mp_stack_id' => 
      array (
        'value' => '13',
      ),
      '_edit_last' => 
      array (
        'value' => '6',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '600',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '16',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Lato',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '400',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: left;&quot;&gt;ABOUT THE ALBUM&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '30',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'merriweather',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '300',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: left;&quot;&gt;Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed aliquet eros nunc, at elementum ex bibendum id. Donec ac elit enim. Sed sodales orci vel elementum malesuada. Suspendisse porta nisl sodales, volutpat augue sed, posuere ipsum. Integer ex dolor, tristique vitae ex eu, finibus ultrices tellus. Nulla tortor mauris, congue at posuere nec, auctor a purus. Suspendisse in varius quam, eget rutrum purus. Fusce dui nisl, lacinia in turpis ut, consequat auctor sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi sollicitudin libero libero, id bibendum dui pulvinar quis. Integer eu nisi sed sem viverra convallis a ut arcu. Nullam ornare nunc nibh. Pellentesque sodales nisl turpis, sed cursus metus venenatis et. Integer ex tortor, sodales sed ipsum et, ornare finibus nunc.&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Lato',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '400',
      ),
    ),
    'brick_4' => 
    array (
      'brick_title' => 'Download links',
      'mp_stack_order' => 1030,
      '_edit_lock' => 
      array (
        'value' => '1463601341:6',
      ),
      '_edit_last' => 
      array (
        'value' => '6',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'image',
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#363a3b',
      ),
      'mp_stacks_singletext_content_type_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'brick_text_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'brick_text_font_size' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_line_height' => 
            array (
              'value' => '6',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom' => 
            array (
              'value' => '2',
              'attachment' => false,
            ),
            'brick_text_color_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_tablet' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_tablet' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_color_laptop' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_color_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_font_size_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_line_height_mobile' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'brick_text_paragraph_margin_bottom_mobile' => 
            array (
              'value' => '15',
              'attachment' => false,
            ),
            'brick_text_google_font' => 
            array (
              'value' => 'Lato',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' => 
            array (
              'value' => '400',
              'attachment' => false,
            ),
            'brick_text' => 
            array (
              'value' => '&lt;p style=&quot;text-align: left;&quot;&gt;[mp_button icon=&quot;fa-music&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;BUY ON ITUNES&quot; link=&quot;https://itunes.apple.com/ca/album/beneath-the-skin-deluxe/id976391945&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;&quot; open_type=&quot;_blank&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;[mp_button icon=&quot;fa-apple&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;STREAM ON APPLE MUSIC&quot; link=&quot;http://www.apple.com/ca/music/&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;&quot; open_type=&quot;_blank&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;[mp_button icon=&quot;fa-spotify&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;STREAM ON SPOTIFY&quot; link=&quot;https://open.spotify.com/album/2mD97VgxTRfwB8F5tvkwrL&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;&quot; open_type=&quot;_blank&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;[mp_button icon=&quot;fa-shopping-cart&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;BUY A HARD COPY&quot; link=&quot;https://demo.mintplugins.com/echo/product/recollection/&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;&quot; open_type=&quot;_blank&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' => 
      array (
        'value' => '13',
      ),
      'brick_max_width' => 
      array (
        'value' => '600',
      ),
      'brick_alignment' => 
      array (
        'value' => 'leftright',
      ),
      'linkgrid_links_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/echo/wp-content/uploads/sites/18/2016/05/bandmember.jpg',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Troy Jackson',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Drummer',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '640',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '360',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/echo/wp-content/uploads/sites/18/2016/05/musicianheadshot.jpg',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Dan Jones',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Guitar and Vocals
[mp_button icon=&quot;fa-twitter-square&quot; icon_position=&quot;left&quot; icon_size=&quot;&quot; icon_spacing=&quot;&quot; text=&quot;&quot; link=&quot;http://twitter.com&quot; btn_bg=&quot;hide&quot; color=&quot;&quot; hover_color=&quot;&quot; text_color=&quot;#ffffff&quot; hover_text_color=&quot;&quot; open_type=&quot;_self&quot; lightbox_width=&quot;500&quot; lightbox_height=&quot;500&quot;]',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'linkgrid_link_url' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_open_type' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_width' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_lightbox_height' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'linkgrid_link_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/echo/wp-content/uploads/sites/18/2016/05/Girlmusician.jpg',
              'attachment' => false,
            ),
            'linkgrid_link_title' => 
            array (
              'value' => 'Amy Atwood',
              'attachment' => false,
            ),
            'linkgrid_link_description' => 
            array (
              'value' => 'Bassist and Vocals',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_bg_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'backgroundColorAlpha' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_masonry' => 
      array (
        'value' => 'linkgrid_masonry',
      ),
      'linkgrid_link_images_show' => 
      array (
        'value' => 'linkgrid_link_images_show',
      ),
      'linkgrid_image_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'scale' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_image_overlay_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'backgroundColor' => 
            array (
              'value' => '#FFF',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_title_show' => 
      array (
        'value' => 'linkgrid_title_show',
      ),
      'linkgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'linkgrid_description_show' => 
      array (
        'value' => 'linkgrid_description_show',
      ),
      'linkgrid_description_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'linkgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'brick_overall_google_font' => 
      array (
        'value' => 'Lato',
      ),
      'brick_overall_google_font_weight_style' => 
      array (
        'value' => '400',
      ),
      'linkgrid_title_color' => 
      array (
        'value' => '#ffffff',
      ),
      'linkgrid_title_placement' => 
      array (
        'value' => 'over_image_bottom_right',
      ),
      'linkgrid_description_placement' => 
      array (
        'value' => 'over_image_bottom_right',
      ),
      'linkgrid_description_color' => 
      array (
        'value' => '#ffffff',
      ),
      'embedsgrid_embeds_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'embedsgrid_embed_code' => 
            array (
              'value' => '&lt;iframe src=&quot;//playlists.applemusic.com/embed/pl.ea8a00ee10e94d7a9002583a337cbd3f?country=us&amp;app=music&quot; height=&quot;500px&quot; width=&quot;100%&quot; frameborder=&quot;0&quot;&gt;&lt;/iframe&gt;',
              'attachment' => false,
            ),
            'embedsgrid_embed_code_title' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'embedsgrid_embed_code_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_masonry' => 
      array (
        'value' => 'embedsgrid_masonry',
      ),
      'embedsgrid_title_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_title_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_title_background_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_description_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_description_animation_keyframes' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'embedsgrid_description_animation_repeater_description' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'animation_length' => 
            array (
              'value' => '500',
              'attachment' => false,
            ),
            'opacity' => 
            array (
              'value' => '100',
              'attachment' => false,
            ),
            'rotateZ' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateX' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
            'translateY' => 
            array (
              'value' => '0',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'embedsgrid_description_background_show' => 
      array (
        'value' => '',
      ),
      'embedsgrid_per_row' => 
      array (
        'value' => '1',
      ),
      'embedsgrid_per_page' => 
      array (
        'value' => '1',
      ),
      'brick_max_width_c1' => 
      array (
        'value' => '',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '40',
      ),
      'brick_second_content_type' => 
      array (
        'value' => 'singletext',
      ),
      'brick_main_image' => 
      array (
        'value' => 'ALBUMCOVER.jpg',
        'attachment' => true,
      ),
      'brick_main_image_max_width' => 
      array (
        'value' => '200',
      ),
      'brick_split_percentage' => 
      array (
        'value' => '50',
      ),
    ),
  ),
);
		
		//Loop through each brick
		foreach( $template_array['stack_bricks'] as $brick_name => $brick_options ){
			
			//Loop through each meta option
			foreach( $brick_options as $meta_key => $meta_option ){
				
				//If this isn't the title or the order
				if ( $meta_key != 'brick_title' && $meta_key != 'mp_stack_order' ){
						
					//If this is a repeater
					if ( isset( $meta_option['value'] ) && is_array( $meta_option['value'] ) ){
						
						$fixed_repeaters = array();
						
						$repeat_counter = 0;
						
						//Loop thorugh each repeater
						foreach( $meta_option['value'] as $repeaters ){
							
							//Loop through each field in this repeater
							foreach( $repeaters as $field_key_id => $repeater_meta_option ){
								
								//If this is an attachment, set the url to be local to this plugin
								if ( isset( $repeater_meta_option['attachment'] ) && $repeater_meta_option['attachment'] ){
									
									//Check if this field contains any HTML img tags
									if ( strpos( $repeater_meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
										
										//Get the URL in each img tag's "src" attribute
										$value_explode_results = explode( 'src=&quot;', $repeater_meta_option['value'] );
										
										$rebuilt_field_value = NULL;
																			
										//Loop through each exploded string
										if ( is_array( $value_explode_results ) ){
											foreach( $value_explode_results as $value_explode_result ){
																						
												//Get the image url
												$temp_explode_holder = explode( '&quot', $value_explode_result );
												$img_url = $temp_explode_holder[0];
												
												$repeater_meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $repeater_meta_option['value'] );
												
											}
										}
										
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = $repeater_meta_option['value'];
									}
									else{
									
										$template_array['stack_bricks'][$brick_name][$meta_key]['value'][$repeat_counter][$field_key_id]['value'] = plugins_url( 'images/' . $repeater_meta_option['value'], __FILE__ );
									}
									
								}
							}
							
							$repeat_counter = $repeat_counter + 1;
							
						}
					}
					
					//If this is not a repeater
					else{
						
						//If this is an attachment, set the url to be local to this plugin
						if ( isset( $meta_option['attachment'] ) && $meta_option['attachment'] ){
							
							//Check if this field contains any HTML img tags
							if ( strpos( $meta_option['value'], '&lt;p&gt;&lt;img' ) !== false ){
								
								//Get the URL in each img tag's "src" attribute
								$value_explode_results = explode( 'src=&quot;', $meta_option['value'] );
								
								$rebuilt_field_value = NULL;
																
								//Loop through each exploded string
								if ( is_array( $value_explode_results ) ){
									foreach( $value_explode_results as $value_explode_result ){
																				
										//Get the image url
										$temp_explode_holder = explode( '&quot', $value_explode_result );
										$img_url = $temp_explode_holder[0];
	
										$meta_option['value'] = str_replace( 'src=&quot;' . $img_url, 'src=&quot;' . plugins_url( 'images/' . $img_url, __FILE__ ), $meta_option['value'] );
										
									}
								}
								
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = $meta_option['value'];
							}
							else{		
									
								$template_array['stack_bricks'][$brick_name][$meta_key]['value'] = plugins_url( 'images/' . $meta_option['value'], __FILE__ );
							}
						}
						
					}
				}
				
			}
			
		}
		
		return $template_array;
		
	}}