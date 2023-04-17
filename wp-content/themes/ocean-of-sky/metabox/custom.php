<?php

add_action('cmb2_admin_init', 'custom_metaboxes');

function custom_metaboxes(){
    $cmb = new_cmb2_box(array(
        'object_types' => array('post'),
        'title' => 'Aditional Data',
        'id' => 'aditional',
    ));

    $cmb->add_field(array(
        'name'       => 'Sub Title',
		'desc'       => 'field description (optional)',
		'id'         => 'title',
		'type'       => 'text',
    ));
    $cmb->add_field(array(
        'name'       => 'Description',
		'desc'       => 'field description',
		'id'         => 'desc',
		'type'       => 'wysiwyg',
        'options'   => array(
            'wpautop' => true,
            'textarea_rows' => get_option('default_post_edit_rows', 4),
        )
    ));

    $cmb_another = new_cmb2_box(array(
        'object_types' => array('basic-testimonials'),
        'title' => 'Aditional Field',
        'id' => 'testimonial',
    ));
    $cmb_another->add_field(array(
        'name'       => 'Designation',
		'desc'       => 'field designation',
		'id'         => 'designation',
		'type'       => 'text',
    ));
    $cmb_another->add_field(array(
        'name'       => 'Description',
		'desc'       => 'field description',
		'id'         => 'desc',
		'type'       => 'wysiwyg',
        'options'   => array(
            'wpautop' => true,
            'textarea_rows' => get_option('default_post_edit_rows', 4),
        )
    ));
}