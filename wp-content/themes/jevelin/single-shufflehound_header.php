<?php
/* Template Name: Headers */
get_header();
$frontpage_id = get_option( 'page_on_front' );
?>


    <?php if( isset( $_GET['vc_editable'] ) && $_GET['vc_editable'] == 'true' ) : ?>
        <style media="screen">
            #wpadminbar {
                display: none;
            }
        </style>
    <?php endif; ?>


    <?php
    if( 'shufflehound_header' == get_post_type( get_the_ID() ) ) :
        $header_above_content = jevelin_post_option( get_option( 'page_on_front' ), 'header_above_content' );
    else :
        $header_above_content = jevelin_post_option( get_the_ID(), 'header_above_content' );
    endif;

    if( $header_above_content == 'enabled' ) : ?>

        <div class="sh-header-template" style="position: absolute; z-index: 1000;">
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>

    <?php else : ?>

        <div class="sh-header-template-standard">
            <?php the_content(); ?>
        </div>

    <?php endif; ?>


    </div>
    <div style="overflow-y: hidden; min-height: 100%; max-height: 1400px; position: relative; display: none;">
        <div class="container">
            <?php
            $post = get_post( $frontpage_id );
            //var_dump( do_shortcode( $post->post_content ) );
            //var_dump( $post );

            //if( get_permalink( $frontpage_id ) ) :
                $post = get_post( $frontpage_id );
                if( $post->post_content ) :

                    Vc_Manager::getInstance()->vc()->addShortcodesCustomCss( $frontpage_id );
                    $footer_css = ob_get_contents();
                    ob_end_clean();

                    if( $footer_css ) :
                        echo $footer_css;
                    else :
                        $footer_custom_css = get_post_meta( $frontpage_id, '_wpb_shortcodes_custom_css', true );
                        if( !empty( $footer_custom_css ) ) :
                            echo '<style type="text/css">';
                            echo $footer_custom_css;
                            echo '</style>';
                        endif;
                    endif;
            ?>
                <div id="content" class="page-content" style="margin-top: -1px;">
                    <?php echo do_shortcode( $post->post_content ); ?>
                </div>
            <?php endif; //endif; ?>
        </div>

        <div style="position: absolute; z-index: 101;bottom: 0; left: 0; right: 0; background-image: linear-gradient(rgba(255,255,255,0), #ffffff); height: 300px;"></div>
        <div style="position: absolute; z-index: 100; bottom: 0; left: 0; right: 0; top: 0;"></div>
    </div>

<?php get_footer(); ?>
