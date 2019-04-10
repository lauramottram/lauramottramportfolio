<?php
class vcj_contact_form_7 extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_contact_form_7', array( $this, '_html' ) );
    }

    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }
        $forms = array();
        $get_forms = new WP_Query( array( 'post_type' => 'wpcf7_contact_form', 'post_per_page' => -1 ) );
        if( $get_forms->have_posts() ) :
            while ( $get_forms->have_posts() ) : $get_forms->the_post();
                $forms[get_the_title()] = get_the_ID();
            endwhile;
        endif;

        vc_map( array (
            'name' => 'Contact Form 7',
            'base' => 'vcj_contact_form_7',
            'description' => 'Place Contact Form 7',
            'category' => 'Jevelin Elements',
            'params' => array(

                array (
                    'param_name' => 'form_id',
                    'heading' => 'Select Form',
                    'description' => 'Select your Contact Form 7 form.<br />New form can be created <a target="_blank" href="'. admin_url( 'admin.php?page=wpcf7' ) .'">here</a>',
                    'value' => $forms,
                    'type' => 'dropdown',
                ),

                array (
                    'param_name' => 'style',
                    'heading' => 'Style',
                    'description' => 'Select main style',
                    'value' =>
                    array (
                        'Standard' => 'style1',
                        'Input Round Edges (2px border)' => 'style2',
                        'Input Center Text' => 'style3',
                        'Bottom Line with simple submit button' => 'style4',
                        'Bottom Line with submit button in accent color' => 'style4 style6',
                        'Dark line' => 'style5',
                    ),
                    'type' => 'dropdown',
                    'std' => 'style1',
                ),

                array(
                    'param_name' => 'submit_font_size',
                    'heading' => __( 'Font Size', 'jevelin' ),
                    'description' => __( 'Enter submit button font size (Note: CSS measurement units allowed).', 'jevelin' ),
                    'type' => 'textfield',
                    'group' => __( 'Submit Button', 'jevelin' ),
                ),

                array (
                    'param_name' => 'submit_text_transform',
                    'heading' => 'Submit Text Transformation',
                    'value' => array (
                        'Default' => 'default',
                        'None' => 'none',
                        'Uppercase' => 'uppercase',
                        'Lowercase' => 'lowercase',
                        'Capitalize' => 'capitalize',
                    ),
                    'type' => 'dropdown',
                    'std' => 'default',
                    'group' => __( 'Submit Button', 'jevelin' ),
                ),

                array (
                    'param_name' => 'submit_background_color',
                    'heading' => 'Background Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

                array (
                    'param_name' => 'submit_background_hover_color',
                    'heading' => 'Background Hover Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

                array (
                    'param_name' => 'submit_text_color',
                    'heading' => 'Text Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

                array (
                    'param_name' => 'submit_text_hover_color',
                    'heading' => 'Text Hover Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

                array (
                    'param_name' => 'submit_border_color',
                    'heading' => 'Border Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

                array (
                    'param_name' => 'submit_border_hover_color',
                    'heading' => 'Border Color',
                    'type' => 'colorpicker',
                    'group' => __( 'Submit Button', 'jevelin' ),
                    'edit_field_class' => 'vc_col-xs-6',
                ),

            ),
        ));
    }

    public function _html( $atts, $content ) {
        $style = ( isset( $atts['style'] ) && $atts['style'] ) ? $atts['style'] : 'style1';
        $form_id = ( isset( $atts['form_id'] ) && $atts['form_id'] > 0 ) ? $atts['form_id'] : '';

        $submit_background_color = ( isset( $atts['submit_background_color'] ) && $atts['submit_background_color'] ) ? $atts['submit_background_color'] : '';
        $submit_background_hover_color = ( isset( $atts['submit_background_hover_color'] ) && $atts['submit_background_hover_color'] ) ? $atts['submit_background_hover_color'] : '';
        $submit_text_color = ( isset( $atts['submit_text_color'] ) && $atts['submit_text_color'] ) ? $atts['submit_text_color'] : '';
        $submit_text_hover_color = ( isset( $atts['submit_text_hover_color'] ) && $atts['submit_text_hover_color'] ) ? $atts['submit_text_hover_color'] : '';
        $submit_border_color = ( isset( $atts['submit_border_color'] ) && $atts['submit_border_color'] ) ? $atts['submit_border_color'] : '';
        $submit_border_hover_color = ( isset( $atts['submit_border_hover_color'] ) && $atts['submit_border_hover_color'] ) ? $atts['submit_border_hover_color'] : '';

        $submit_font_size = ( isset( $atts['submit_font_size'] ) && $atts['submit_font_size'] ) ? $atts['submit_font_size'] : '';
        $submit_text_transform = ( isset( $atts['submit_text_transform'] ) && $atts['submit_text_transform'] ) ? $atts['submit_text_transform'] : 'default';
        ob_start(); ?>

            <?php if( $submit_background_color || $submit_text_color ) : ?>
                <style media="screen">
                    #cf7-<?php echo intval( $form_id ); ?> .wpcf7-submit {
                        <?php if( $submit_text_color )  :?>
                            color: <?php echo esc_attr( $submit_text_color ); ?>!important;
                        <?php endif; ?>

                        <?php if( $submit_background_color )  :?>
                            background-color: <?php echo esc_attr( $submit_background_color ); ?>!important;
                        <?php endif; ?>

                        <?php if( $submit_font_size ) : ?>
                            font-size: <?php echo esc_attr( $submit_font_size ); ?>!important;
                        <?php endif; ?>

                        <?php if( $submit_text_transform && $submit_text_transform != 'default' ) : ?>
                            text-transform: <?php echo esc_attr( $submit_text_transform ); ?>;
                        <?php endif; ?>

                        border-width: 2px;
                        border-style: solid;

                        <?php if( $submit_border_color ) : ?>
                            border-color: <?php echo esc_attr( $submit_border_color ); ?>;
                        <?php elseif( $submit_background_color ) : ?>
                            border-color: <?php echo esc_attr( $submit_background_color ); ?>;
                        <?php else : ?>
                            border-color: inherit;
                        <?php endif; ?>
                    }


                    #cf7-<?php echo intval( $form_id ); ?> .wpcf7-submit:hover,
                    #cf7-<?php echo intval( $form_id ); ?> .wpcf7-submit:focus {
                        <?php if( $submit_text_hover_color ) : ?>
                            color: <?php echo esc_attr( $submit_text_hover_color ); ?>!important;
                        <?php endif; ?>

                        <?php if( $submit_background_hover_color ) : ?>
                            background-color: <?php echo esc_attr( $submit_background_hover_color ); ?>!important;
                        <?php endif; ?>

                        <?php if( $submit_border_hover_color ) : ?>
                            border-color: <?php echo esc_attr( $submit_border_hover_color ); ?>;
                        <?php endif; ?>
                    }
                </style>
            <?php endif; ?>

            <div id="cf7-<?php echo intval( $form_id ); ?>" class="sh-cf7 sh-cf7-wpbakery sh-cf7-<?php echo esc_attr( $style ); ?>">
                <?php
                    if( $form_id > 0 && shortcode_exists( 'contact-form-7' ) ) :
                        echo do_shortcode( '[contact-form-7 id="'.intval( $form_id ).'" title="Subscribe"]' );
                    endif;
                ?>
            </div>

        <?php return ob_get_clean();
    }
}

new vcj_contact_form_7();
