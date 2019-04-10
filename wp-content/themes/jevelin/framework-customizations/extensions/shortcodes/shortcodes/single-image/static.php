<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
if( !function_exists( 'jevelin_shortcode_single_image_css' ) ) :
	function jevelin_shortcode_single_image_css( $data, $id_rand = '' ) {
		$atts = ( $id_rand ) ? $data : jevelin_shortcode_options( $data,'single-image' );
		$id = ( $id_rand ) ? $id_rand : $atts['id'];
	ob_start(); ?>


			#single-image-<?php echo esc_attr( $id ); ?> {
				<?php if( isset($atts['alignment']) && $atts['alignment'] == 'center' ) : ?>
					text-align: center;
				<?php elseif( isset($atts['alignment']) && $atts['alignment'] == 'right' ) : ?>
					text-align: right;
				<?php else : ?>
					text-align: left;
				<?php endif; ?>
			}

			<?php if( isset( $atts['lazy'] ) && $atts['lazy'] == 'enabled' ) : ?>
				#single-image-<?php echo esc_attr( $id ); ?> .sh-image-lazy-loading {
					<?php if( isset($atts['alignment']) && $atts['alignment'] == 'center' ) : ?>
						margin-left: auto;
						margin-right: auto;
					<?php elseif( isset($atts['alignment']) && $atts['alignment'] == 'right' ) : ?>
						margin-auto: 0;
						margin-left: auto;
					<?php endif; ?>
				}
			<?php endif; ?>

			<?php if( isset($atts['radius']) && $atts['radius'] ) : ?>
				#single-image-<?php echo esc_attr( $id ); ?> .sh-single-image-container {
					border-radius: <?php echo esc_attr($atts['radius']); ?>px;
				}
			<?php endif; ?>


		<?php $css = ob_get_contents(); ob_end_clean();
		if( $id_rand ) : echo jevelin_echo_style( $css ); else : wp_add_inline_style( 'jevelin-responsive', jevelin_compress( $css ) ); endif;
	}
	add_action('fw_ext_shortcodes_enqueue_static:single_image','jevelin_shortcode_single_image_css');
endif;
?>
