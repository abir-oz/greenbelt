<?php
add_action( 'cmb2_init', 'cmb2_add_metabox' );
function cmb2_add_metabox() {

    $prefix = '_greenbelt_';

    $cmb = new_cmb2_box( array(
        'id'           => 'trav_metabox',
        'title'        => __( 'Traveler', 'greenbelt' ),
        'object_types' => array( 'travblog' ),
        'context'      => 'side',
        'priority'     => 'high',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Writer', 'greenbelt' ),
        'id' => 'writer',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Facebook URL', 'greenbelt' ),
        'id' => 'fb-url',
        'type' => 'text_url',
    ) );

    $cmb = new_cmb2_box( array(
        'id'           => 'tpack_metabox',
        'title'        => __( 'Tourpackage', 'greenbelt' ),
        'object_types' => array( 'tourpackage' ),
        'context'      => 'side',
        'priority'     => 'high',
    ) );

    $cmb->add_field( array(
        'name' => __( 'Tour Cost', 'greenbelt' ),
        'id' => 'tour-cost',
        'type' => 'text',
    ) );

}