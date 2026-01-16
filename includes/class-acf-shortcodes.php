<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class ACF_Utility_Shortcodes {

    public function __construct() {
        add_shortcode( 'acf_image', [ $this, 'render_acf_image' ] );
    }

    public function render_acf_image( $atts ) {
        $atts = shortcode_atts(
            [
                'field'   => '',
                'post_id' => get_the_ID(),
            ],
            $atts
        );

        if ( empty( $atts['field'] ) ) {
            return '';
        }

        $image = get_field( $atts['field'], $atts['post_id'] );

        if ( ! $image ) {
            return '';
        }

        return sprintf(
            '<img src="%s" alt="%s" />',
            esc_url( $image['url'] ),
            esc_attr( $image['alt'] )
        );
    }
}

new ACF_Utility_Shortcodes();
