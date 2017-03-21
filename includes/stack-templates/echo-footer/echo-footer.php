<?php 
/**
 * MP Stacks Template Footer
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Footer
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
	 * Add Footer to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_echo_footer
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_echo_footer( $installed_templates ){ 
		
		$installed_templates['mp_stacks_echo_footer_array'] = array(
			'template_slug' => 'echo_footer',
			'template_title' => __( 'Footer', 'echo_band_theme_bundle' ),
			'template_description' => __('Created using: Echo Band Theme Bundle’s “Footer” Stack', 'echo_band_theme_bundle' ),
			'template_tags' => 'Footer, Echo',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/echo/',
		);
		
		return $installed_templates;
	
	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_echo_footer' );
	
	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_echo_footer_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_echo_footer_to_default_stacks( $default_stacks_to_create ){ 
				
		$default_stacks_to_create['']['echo_footer'] = array( 'title' => 'Footer','is_footer' => true, );
		
		return $default_stacks_to_create;
	
	}
	add_filter( 'echo_band_theme_bundle_default_stacks', 'mp_stacks_templates_echo_footer_to_default_stacks' );
	
	/**
	 * This function holds and returns the Footer Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_echo_footer_array(){ 
	
		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Echo Band Theme Bundle’s “Footer” Stack',
  'stack_bricks' => 
  array (
    'brick_1' => 
    array (
      'brick_title' => 'Footer',
      'mp_stack_order' => 1000,
      '_edit_lock' => 
      array (
        'value' => '1485455195:6',
      ),
      'mp_stack_id' => 
      array (
        'value' => '18',
      ),
      '_edit_last' => 
      array (
        'value' => '6',
      ),
      'brick_first_content_type' => 
      array (
        'value' => 'sociallinks',
      ),
      'brick_alignment' => 
      array (
        'value' => 'centered',
      ),
      'mp_sociallinks_repeater' => 
      array (
        'value' => 
        array (
          0 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Youtube',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-youtube',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://www.youtube.com/c/mintpluginsforwordpress',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          1 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Twitter',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-c-twitter',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://twitter.com/mintplugins/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          2 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'Instagram',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-instagram',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#fcfcfc',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://www.instagram.com/mintplugins/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
          3 => 
          array (
            'sociallink_title' => 
            array (
              'value' => 'sound cloud',
              'attachment' => false,
            ),
            'sociallink_icon_type' => 
            array (
              'value' => 'sociallink_icon',
              'attachment' => false,
            ),
            'sociallink_icon' => 
            array (
              'value' => 'mp-stacks-sociallinks-soundcloud',
              'attachment' => false,
            ),
            'sociallink_icon_color' => 
            array (
              'value' => '#ffffff',
              'attachment' => false,
            ),
            'sociallink_icon_color_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_image' => 
            array (
              'value' => 'http://demo.mintplugins.com/echo/wp-content/uploads/sites/18/2016/05/soundcloudicon-1.png',
              'attachment' => false,
            ),
            'sociallink_image_hover' => 
            array (
              'value' => '',
              'attachment' => false,
            ),
            'sociallink_icon_link' => 
            array (
              'value' => 'https://soundcloud.com/',
              'attachment' => false,
            ),
            'sociallink_icon_link_type' => 
            array (
              'value' => '_blank',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'brick_no_borders' => 
      array (
        'value' => '',
      ),
      'brick_bg_color' => 
      array (
        'value' => '#2d2d2d',
      ),
      'brick_min_above_below' => 
      array (
        'value' => '2',
      ),
      'brick_bg_color_opacity' => 
      array (
        'value' => '100',
      ),
      'sociallinks_color' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover' => 
      array (
        'value' => '#eaeaea',
      ),
      'sociallinks_color_tablet' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover_tablet' => 
      array (
        'value' => '#eaeaea',
      ),
      'sociallinks_color_mobile' => 
      array (
        'value' => '#ffffff',
      ),
      'sociallinks_color_hover_mobile' => 
      array (
        'value' => '#eaeaea',
      ),
      'brick_min_below' => 
      array (
        'value' => '2',
      ),
      'sociallinks_per_row' => 
      array (
        'value' => '4',
      ),
      'sociallinks_per_row_tablet' => 
      array (
        'value' => '4',
      ),
      'sociallinks_per_row_mobile' => 
      array (
        'value' => '4',
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