<?php

if( function_exists('acf_add_local_field_group') ):
    
// Home
acf_add_local_field_group(array(
	'key' => 'group_intro',
	'title' => esc_html__('Banner Section', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_page_title',
			'label' => esc_html__('Page Title', 'valuexvail'),
			'name' => 'page_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_intro_title',
			'label' => esc_html__('Title', 'valuexvail'),
			'name' => 'intro_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),
		array(
			'key' => 'field_intro_date-icon',
			'label' => esc_html__('Icon', 'valuexvail'),
			'name' => 'intro_date-icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
		),

		array(
			'key' => 'field_intro_date',
			'label' => esc_html__('Date', 'valuexvail'),
			'name' => 'intro_date',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
		),

		array(
			'key' => 'field_intro_city_icon',
			'label' => esc_html__('Icon', 'valuexvail'),
			'name' => 'intro_city-icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
		),

		array(
			'key' => 'field_intro_city',
			'label' => esc_html__('City', 'valuexvail'),
			'name' => 'intro_city',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_contact_form_front_page',
	'title' => esc_html__('Contact Form', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_cf_fp',
			'label' => esc_html__('Contact Form Title', 'valuexvail'),
			'name' => 'cf_fp_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),

		array(
			'key' => 'field_contact_form_descriptions',
			'label' => esc_html__('Contact Form Descriptions', 'valuexvail'),
			'name' => 'cf_fp_descriptions',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_presentation',
	'title' => esc_html__('Presentations Section Title', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_presentations_title',
			'label' => esc_html__('Title', 'valuexvail'),
			'name' => 'presentations_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_type',
				'operator' => '==',
				'value' => 'front_page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

// About
acf_add_local_field_group(array(
	'key' => 'group_left_sidebar',
	'title' => esc_html__('Left Sidebar', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_left_sidebar_image',
			'label' => esc_html__('Image', 'valuexvail'),
			'name' => 'left_sidebar_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
		),
		array(
			'key' => 'field_left_sidebar_text',
			'label' => esc_html__('Text', 'valuexvail'),
			'name' => 'ls_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_left_sidebar_cf_title',
			'label' => esc_html__('Title Contact Form', 'valuexvail'),
			'name' => 'ls_cf_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_left_sidebar_cf_shortcode',
			'label' => esc_html__('Text', 'valuexvail'),
			'name' => 'ls_cf_shortcode',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-about.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

//Photos
// acf_add_local_field_group(array(
// 	'key' => 'group_photo_gallery',
// 	'title' => esc_html__('Photo Gallery', 'valuexvail'),
// 	'fields' => array(
// 		array(
// 			'key' => 'field_photo_gallery',
// 			'label' => esc_html__('Photo Gallery', 'valuexvail'),
// 			'name' => 'photo_gallery',
// 			'type' => 'photo_gallery',
// 			'instructions' => '',
// 			'required' => 0,
// 			'conditional_logic' => 0,
// 			'wrapper' => array(
// 				'width' => '',
// 				'class' => '',
// 				'id' => '',
// 			),
// 			'fields[' => array(
// 				'edit_modal' => 'Default',
// 				'images_limit' => '',
// 			),
// 			'edit_modal' => 'Default',
// 		),
// 	),
// 	'location' => array(
// 		array(
// 			array(
// 				'param' => 'page_template',
// 				'operator' => '==',
// 				'value' => 'page-photos.php',
// 			),
// 		),
// 	),
// 	'menu_order' => 0,
// 	'position' => 'normal',
// 	'style' => 'default',
// 	'label_placement' => 'top',
// 	'instruction_placement' => 'label',
// 	'hide_on_screen' => '',
// 	'active' => true,
// 	'description' => '',
// ));

// Contact Us
acf_add_local_field_group(array(
	'key' => 'group_contact_form',
	'title' => esc_html__('Contact Form', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_contact_form_title',
			'label' => esc_html__('Title', 'valuexvail'),
			'name' => 'cf_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-contact-us.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_contact_information',
	'title' => esc_html__('Contact Information', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_contact_information_title',
			'label' => esc_html__('Title', 'valuexvail'),
			'name' => 'ci_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
        array(
			'key' => 'field_contact_information_subtitle_address',
			'label' => esc_html__('Subtitle Address', 'valuexvail'),
			'name' => 'ci_subtitle_address',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_contact_information_address_text',
			'label' => esc_html__('Address', 'valuexvail'),
			'name' => 'ci_address_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
        ),
        array(
			'key' => 'field_contact_information_subtitle_email',
			'label' => esc_html__('Subtitle Email', 'valuexvail'),
			'name' => 'ci_subtitle_email',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'key' => 'field_contact_information_email_text',
			'label' => esc_html__('Email', 'valuexvail'),
			'name' => 'ci_email_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-contact-us.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

//Applly
acf_add_local_field_group(array(
	'key' => 'group_apply_text',
	'title' => esc_html__('Content', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_apply_text',
			'label' => esc_html__('Text', 'valuexvail'),
			'name' => 'apply_text',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-apply.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_contact_form_apply',
	'title' => esc_html__('Contact Form', 'valuexvail'),
	'fields' => array(
		array(
			'key' => 'field_contact_form_apply_title',
			'label' => esc_html__('Title', 'valuexvail'),
			'name' => 'cf_apply_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'page-apply.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;

?>