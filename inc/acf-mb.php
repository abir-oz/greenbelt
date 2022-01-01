<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5f6c6c92cbcb2',
	'title' => 'Related Post',
	'fields' => array(
		array(
			'key' => 'field_5f6c74a806585',
			'label' => 'লেখকের অন্যান্য পোষ্ট',
			'name' => 'related_posts',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'travblog',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 3,
			'return_format' => 'id',
		),
		array(
			'key' => 'field_5f6f13532266e',
			'label' => 'Section Name to Show',
			'name' => 'more_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'ভ্রমণ গাইড পড়ুন',
			'placeholder' => 'ভ্রমণ গাইড পড়ুন',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f6c836818afa',
			'label' => 'ভ্রমণ গাইড',
			'name' => 'tour_guide',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
			'taxonomy' => array(
				0 => 'category:travel-info',
			),
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 6,
			'return_format' => 'id',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'travblog',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'author',
		1 => 'categories',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5f70a9d85829f',
	'title' => 'Testimonial',
	'fields' => array(
		array(
			'key' => 'field_5f70a9f4747f2',
			'label' => 'name',
			'name' => 'name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Name',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f70aa16747f3',
			'label' => 'Designation',
			'name' => 'designation',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => 'br',
		),
		array(
			'key' => 'field_5f70ac6c6ca58',
			'label' => 'Have FB ID?',
			'name' => 'have_fb_id',
			'type' => 'true_false',
			'instructions' => 'If, is checked FB URL option will be shown.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5f70ac246ca57',
			'label' => 'FB url',
			'name' => 'fb_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5f70ac6c6ca58',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'testimonial',
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
	'key' => 'group_5f6d032a84295',
	'title' => 'ভ্রমণ গাইড',
	'fields' => array(
		array(
			'key' => 'field_5f6f10662fbd7',
			'label' => 'Section Name to Show',
			'name' => 'more_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'ভ্রমণ গাইড পড়ুন',
			'placeholder' => 'ভ্রমণ গাইড পড়ুন',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5f6d03dc724c1',
			'label' => 'ভ্রমণ গাইড',
			'name' => 'tour_guide',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'post',
			),
			'taxonomy' => array(
				0 => 'category:travel-info',
			),
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => 6,
			'return_format' => 'id',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
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

add_filter('acf/settings/show_admin', '__return_false');