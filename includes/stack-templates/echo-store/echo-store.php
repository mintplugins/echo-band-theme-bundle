<?php
/**
 * MP Stacks Template Store
 *
 * @link http://mintplugins.com/doc/
 * @since 1.0.0
 *
 * @package     MP Stacks Template Store
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
	 * Add Store to the list of installed stack templates
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp_stacks_templates_add_echo_store
	 * @see      function_name()
	 * @param    array $installed_templates See link for description.
	 * @return   array $installed_templates See link for description.
	 */
	function mp_stacks_templates_add_echo_store( $installed_templates ){

		$installed_templates['mp_stacks_echo_store_array'] = array(
			'template_slug' => 'echo_store',
			'template_title' => __( 'Store', 'echo_band_theme_bundle' ),
			'template_description' => __('Created using: Echo Band Theme Bundle\'s "Store" Stack', 'echo_band_theme_bundle' ),
			'template_tags' => 'Store, Echo',
			'template_preview_img' => plugins_url( '/images/preview_thumbnail.jpg', __FILE__ ),
			'template_demo_url' => 'https://demo.mintplugins.com/echo/store/',
		);

		return $installed_templates;

	}
	add_filter( 'mp_stacks_installed_templates', 'mp_stacks_templates_add_echo_store' );

	/**
	 * Add This Stack Template to the list of Default Stacks to create when the parent Theme Bundle is activated.
	 *
	 * @since    1.0.0
	 * @link     https://mintplugins.com/doc/mp_stacks_templates_echo_store_to_default_stacks
	 * @see      function_name()
	 * @param    array $default_stacks_to_create See link for description.
	 * @return   array $default_stacks_to_create See link for description.
	 */
	function mp_stacks_templates_echo_store_to_default_stacks( $default_stacks_to_create ){

		$default_stacks_to_create['page']['echo_store'] = array( 'title' => 'Store','add_to_primary_menu' => 'true', );

		return $default_stacks_to_create;

	}
	add_filter( 'echo_band_theme_bundle_default_stacks', 'mp_stacks_templates_echo_store_to_default_stacks' );

	/**
	 * This function holds and returns the Store Template Array
	 *
	 * @since    1.0.0
	 * @link     http://mintplugins.com/doc/mp-stacks-stack-template-function
	 * @return   array The Stack Template Aray
	 */
	function mp_stacks_echo_store_array(){

		$template_array = array (
  'stack_title' => '',
  'stack_description' => 'Created using: Created using: Echo Band Theme Bundle\'s "Store" Stack',
  'stack_bricks' =>
  array (
    'brick_1' =>
    array (
      'brick_title' => 'Header',
      'mp_stack_order' => 1000,
      '_edit_lock' =>
      array (
        'value' => '1463528090:6',
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
        'value' => 'homebackground.jpg',
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
              'value' => '&lt;hr /&gt;
&lt;p&gt;STORE&lt;/p&gt;
&lt;hr /&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' =>
      array (
        'value' => '5',
      ),
      'brick_alignment' =>
      array (
        'value' => 'centered',
      ),
      'brick_min_above_below' =>
      array (
        'value' => '100',
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
        'value' => '',
      ),
    ),
    'brick_2' =>
    array (
      'brick_title' => 'About',
      'mp_stack_order' => 1010,
      '_edit_lock' =>
      array (
        'value' => '1472245043:6',
      ),
      '_edit_last' =>
      array (
        'value' => '6',
      ),
      'brick_first_content_type' =>
      array (
        'value' => 'woogrid',
      ),
      'brick_no_borders' =>
      array (
        'value' => '',
      ),
      'brick_bg_color' =>
      array (
        'value' => '#ffffff',
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
              'value' => '20',
              'attachment' => false,
            ),
            'brick_text_line_height' =>
            array (
              'value' => '25',
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
              'value' => '900',
              'attachment' => false,
            ),
            'brick_text' =>
            array (
              'value' => '&lt;p style=&quot;text-align: left;&quot;&gt;IT ALL STARTED WHEN...&lt;/p&gt;
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
              'value' => 'Merriweather',
              'attachment' => false,
            ),
            'brick_text_google_font_weight_style' =>
            array (
              'value' => '300',
              'attachment' => false,
            ),
            'brick_text' =>
            array (
              'value' => '&lt;p style=&quot;text-align: left;&quot;&gt;Nullam vehicula cursus rhoncus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis eu nulla tincidunt, convallis nunc vel, blandit neque. Curabitur porta elementum dictum. Integer condimentum rutrum ante, eget hendrerit urna ornare in. Duis sollicitudin arcu libero, in accumsan turpis tempor nec. Sed purus augue, blandit ut nunc et, blandit bibendum mauris. Aliquam pulvinar augue quis dui ornare fermentum.&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;Curabitur congue felis in tellus ultricies faucibus. Donec justo urna, vehicula in pretium eget, euismod at mauris. Nullam eu dui rhoncus, pretium diam eu, venenatis nulla. Duis quis ligula non augue condimentum vehicula. Pellentesque porttitor sagittis nibh at luctus. Curabitur sodales, lacus vitae condimentum congue, dui mi viverra purus, nec pellentesque nunc purus et arcu. Donec pretium odio et magna pulvinar, varius hendrerit tellus aliquet. Quisque suscipit pharetra quam nec venenatis. Etiam quis turpis ornare, bibendum magna vitae, eleifend nibh. Integer ullamcorper tincidunt velit, vel vehicula leo suscipit non. Nunc tellus nulla, auctor id elit sed, facilisis ultricies dolor. Sed condimentum, lectus at auctor dapibus, nunc quam pellentesque mauris, vitae sollicitudin nulla est vitae ante.&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;Integer a consectetur leo, interdum laoreet risus. Phasellus euismod, augue sed luctus iaculis, sem orci tristique ex, non pellentesque mi purus non nisi. In non euismod odio, a luctus massa. Vestibulum a placerat diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vestibulum erat ac enim tincidunt, nec aliquam nisl faucibus. Nunc eu augue sed dolor lacinia feugiat vel sed justo. Donec enim diam, dictum vel neque cursus, lacinia tristique sem. Vestibulum sed mauris nisl. Nunc nec odio a odio cursus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis porta augue. Quisque velit arcu, vestibulum vel tortor eu, luctus gravida felis. Aenean tristique velit lectus, quis tempor nunc semper et.&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt; Integer a consectetur leo, interdum laoreet risus. Phasellus euismod, augue sed luctus iaculis, sem orci tristique ex, non pellentesque mi purus non nisi. In non euismod odio, a luctus massa. Vestibulum a placerat diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vestibulum erat ac enim tincidunt, nec aliquam nisl faucibus. Nunc eu augue sed dolor lacinia feugiat vel sed justo. Donec enim diam, dictum vel neque cursus, lacinia tristique sem. Vestibulum sed mauris nisl. Nunc nec odio a odio cursus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec quis porta augue. Quisque velit arcu, vestibulum vel tortor eu, luctus gravida felis. Aenean tristique velit lectus, quis tempor nunc semper et.&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;Cheers,&lt;/p&gt;
&lt;p style=&quot;text-align: left;&quot;&gt;Dan, Troy and Amy&lt;/p&gt;
',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'mp_stack_id' =>
      array (
        'value' => '5',
      ),
      'brick_alignment' =>
      array (
        'value' => 'centered',
      ),
      'brick_max_width' =>
      array (
        'value' => '99999',
      ),
      'woogrid_taxonomy_terms' =>
      array (
        'value' =>
        array (
          0 =>
          array (
            'taxonomy_term' =>
            array (
              'value' => 'all',
              'attachment' => false,
            ),
            'taxonomy_bg_color' =>
            array (
              'value' => '',
              'attachment' => false,
            ),
          ),
        ),
      ),
      'woogrid_default_orderby' =>
      array (
        'value' => '',
      ),
      'woogrid_bg_animation_keyframes' =>
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
      'woogrid_masonry' =>
      array (
        'value' => 'woogrid_masonry',
      ),
      'woogrid_isotope' =>
      array (
        'value' => '',
      ),
      'woogrid_isotope_filter_groups' =>
      array (
        'value' => '""',
      ),
      'woogrid_isotope_orderby_options' =>
      array (
        'value' => '""',
      ),
      'woogrid_isotope_nav_btn_bg' =>
      array (
        'value' => 'woogrid_isotope_nav_btn_bg',
      ),
      'woogrid_isotope_nav_btn_text' =>
      array (
        'value' => 'woogrid_isotope_nav_btn_text',
      ),
      'woogrid_isotope_nav_btn_icons' =>
      array (
        'value' => 'woogrid_isotope_nav_btn_icons',
      ),
      'woogrid_featured_images_show' =>
      array (
        'value' => 'woogrid_featured_images_show',
      ),
      'woogrid_image_animation_keyframes' =>
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
      'woogrid_image_overlay_animation_keyframes' =>
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
      'woogrid_title_show' =>
      array (
        'value' => '',
      ),
      'woogrid_title_animation_keyframes' =>
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
      'woogrid_title_background_show' =>
      array (
        'value' => '',
      ),
      'woogrid_price_show' =>
      array (
        'value' => 'woogrid_price_show',
      ),
      'woogrid_price_animation_keyframes' =>
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
      'woogrid_price_background_show' =>
      array (
        'value' => '',
      ),
      'woogrid_excerpt_show' =>
      array (
        'value' => 'woogrid_excerpt_show',
      ),
      'woogrid_excerpt_animation_keyframes' =>
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
      'woogrid_excerpt_background_show' =>
      array (
        'value' => '',
      ),
      'woogrid_per_page' =>
      array (
        'value' => '3',
      ),
      'woogrid_title_placement' =>
      array (
        'value' => 'over_image_middle_centered',
      ),
      'woogrid_title_color' =>
      array (
        'value' => '#ffffff',
      ),
      'woogrid_title_google_font' =>
      array (
        'value' => 'Lato',
      ),
      'woogrid_title_google_font_weight_style' =>
      array (
        'value' => '400',
      ),
      'woogrid_price_placement' =>
      array (
        'value' => 'over_image_bottom_right',
      ),
      'woogrid_price_color' =>
      array (
        'value' => '#ffffff',
      ),
      'woogrid_price_google_font' =>
      array (
        'value' => 'Lato',
      ),
      'woogrid_price_google_font_weight_style' =>
      array (
        'value' => '400',
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
