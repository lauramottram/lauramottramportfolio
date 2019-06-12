<?php
/*
Element: Empry Space (responsive)
*/

class vcj_header_nav extends WPBakeryShortCode {

    function __construct() {
        add_action( 'init', array( $this, '_mapping' ) );
        add_shortcode( 'vcj_header_nav', array( $this, '_html' ) );
    }


    public function _mapping() {
        if ( !defined( 'WPB_VC_VERSION' ) ) { return; }

        vc_map(
            array(
                'name' => __('Header Navigation', 'jevelin'),
                'base' => 'vcj_header_nav',
                'description' => __('Customize and add header navigation', 'jevelin'),
                'category' => __('Jevelin Elements', 'jevelin'),
                'icon' => get_template_directory_uri().'/img/builder-icon.png',
                'params' => array(

                    array(
                        'param_name' => 'list_content',
                        'heading' => __( 'content', 'jevelin' ),
                        'description' => __( 'Enter list content', 'jevelin' ),
                        'type' => 'textfield',
                        'holder' => 'div',
                        'class' => '',
                        'std' => 'I am list',
                        'admin_label' => true,
                    ),

                ),
            )
        );

    }


    public function _html( $atts ) {
        // Params extraction
        extract( shortcode_atts( array(
            'list_content' => 'I am list',
            'icon' => 'icon-arrow-right-circle',
            'style' => 'style1',
            'url' => '',
            'text_color' => '',
            'icon_color' => '',
            'text_font_size' => '',
            'icon_font_size' => '',
        ), $atts ) );

        // HTML
        $id = jevelin_rand();

        // Link construct
        $url = ( $url == '||' ) ? '' : $url;
        $url = vc_build_link( $url );
        $a_link = ( isset( $url['url'] ) ) ? $url['url'] : '';
        $a_title = ( isset( $url['title'] ) && $url['title'] == '' ) ? '' : 'title="'.$url['title'].'"';
        $a_target = ( isset( $url['target'] ) && $url['target'] == '' ) ? '' : 'target="'.$url['target'].'"';





        ob_start(); ?>

            <?php if( $text_color || $icon_color ) : ?>
                <style media="screen">
                    <?php if( $text_color ) : ?>
        				#list-<?php echo esc_attr( $id ); ?>{
        					color: <?php echo esc_attr( $text_color ); ?>!important;
        				}
        			<?php endif; ?>

                </style>
            <?php endif; ?>

            <div class="sh-list sh-list-vc sh-list-<?php echo esc_attr( $style ); ?>" id="list-<?php echo esc_attr( $id ); ?>">

                <?php if ( has_nav_menu( 'header' ) ) : ?>
                    <?php
                        global $blog_id;
                        $current_blog_id = $blog_id;
                        apply_filters( 'jevelin_before_header_nav', $current_blog_id );

                        wp_nav_menu( array(
                            'theme_location' => 'header',
                            'depth' => 4,
                            'container_class' => 'sh-nav-container',
                            'menu_class' => 'sh-nav',
                        ));

                        apply_filters( 'jevelin_after_header_nav', $current_blog_id );
                    ?>
                <?php endif; ?>

            </div>

        <?php return ob_get_clean();
    }

}
new vcj_header_nav();
