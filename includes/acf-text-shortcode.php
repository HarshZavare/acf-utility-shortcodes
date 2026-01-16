<?php
/**
 * ACF Text Shortcode
 *
 * Usage:
 * [acf_text field="field_name"]
 * [acf_text field="field_name" post_id="123"]
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function aus_acf_text_shortcode( $atts ) {

    $atts = shortcode_atts(
        array(
            'field'   => '',
            'post_id' => get_the_ID(),
        ),
        $atts,
        'acf_text'
    );

    if ( empty( $atts['field'] ) ) {
        return '';
    }

    $value = get_field( $atts['field'], $atts['post_id'] );

    if ( empty( $value ) ) {
        return '';
    }

    return esc_html( $value );
}

add_shortcode( 'acf_text', 'aus_acf_text_shortcode' );
