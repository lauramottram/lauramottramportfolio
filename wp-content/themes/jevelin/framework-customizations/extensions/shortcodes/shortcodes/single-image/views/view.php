<?php
if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }
/*-----------------------------------------------------------------------------------*/
/* Single Image HTML
/*-----------------------------------------------------------------------------------*/
$id = ( isset( $atts['id'] ) ) ? $atts['id'] : $id_rand;
$animated = ( isset( $atts['animation'] ) && $atts['animation'] != 'none' ) ? ' sh-animated '. $atts['animation'] : '';
$animated_delay = ( $animated && $atts['animation_delay'] ) ? 'data-wow-delay="'. $atts['animation_delay'] .'s"' : '';
$animated_speed = ( $animated && $atts['animation_speed'] ) ? 'data-wow-duration="'. $atts['animation_speed'] .'s"' : '';

/* Lazy Loading */
if( isset( $atts['lazy'] ) && $atts['lazy'] == 'default' ) :
	$lazy = ( jevelin_option('lazy_loading') == 'enabled' ) ? 1 : 0;
else :
	$lazy = ( isset( $atts['lazy'] ) && $atts['lazy'] == 'enabled' ) ? 1 : 0;
endif;

/* Overlay */
if( !isset( $atts['id'] ) ) :
	$overlay = ( isset( $atts['overlay'] ) ) ? $atts['overlay'] : 'disabled';
	$overlay_atts = jevelin_vc_option_picker( $atts, array(
		array( 'name' => 'button_name', 'if' => in_array( $content, array( 'overlay1' ) ), 'default' => '' ),
		array( 'name' => 'button_icon', 'if' => in_array( $content, array( 'overlay1' ) ), 'default' => 'ti-check' ),
	));
else :
	$overlay = ( isset( $atts['overlay']['overlay'] ) ) ? $atts['overlay']['overlay'] : 'disabled';
	$overlay_atts = jevelin_get_picker( $atts['overlay'] );
endif;


$class = '';
if( isset( $atts['shadow'] ) && $atts['shadow'] != 'disabled' ) :
	$class.= ' sh-single-image-'. $atts['shadow'] ;
endif;

if( $overlay == 'overlay1' ) :
	$class.= ' sh-single-image-has-'. $overlay;
endif;

if( isset( $atts['image_hover'] ) && jevelin_get_image($atts['image_hover']) ) :
	$class.= ' sh-single-image-has-hover';
endif;

$size = ( isset( $atts['size'] ) && $atts['size'] == 'full' ) ? 'full' : 'large';


// defaults
if( !isset( $atts['id'] ) ) :
	if( !isset( $atts['image_hover'] ) ) :
		$atts['image_hover'] = '';
	endif;

	if( !isset( $atts['url'] ) ) :
		$atts['url'] = '';
	endif;


	$wpbakery_image = ( isset( $atts['image'] ) ) ? $atts['image'] : '';
	$atts['image'] = array();
	if( is_numeric( $wpbakery_image ) ) :

		$atts['image']['attachment_id'] = $wpbakery_image;
		$atts['image']['url'] = wp_get_attachment_image_src( $wpbakery_image, $size )[0];

	endif;


	$wpbakery_image_hover = ( isset( $atts['image_hover'] ) ) ? $atts['image_hover'] : '';
	$atts['image_hover'] = array();
	if( is_numeric( $wpbakery_image_hover ) ) :

		$atts['image_hover']['attachment_id'] = $wpbakery_image_hover;
		$atts['image_hover']['url'] = wp_get_attachment_image_src( $wpbakery_image_hover, $size )[0];

	endif;
endif;


// lazy loading
if( $lazy ) :
	$attachment_id = ( isset( $atts['image']['attachment_id'] ) ) ? $atts['image']['attachment_id'] : 0;
	$image_media = wp_get_attachment_metadata( $attachment_id );

	if( $size == 'large' ) :
		$image_width = ( isset( $image_media['sizes'][$size]['width'] ) ) ? $image_media['sizes'][$size]['width'] : 0;
		$image_height = ( isset( $image_media['sizes'][$size]['height'] ) ) ? $image_media['sizes'][$size]['height'] : 0;
	endif;
	if( !isset( $image_width ) || !$image_width ) :
		$image_width = ( isset( $image_media['width'] ) ) ? $image_media['width'] : 0;
		$image_height = ( isset( $image_media['height'] ) ) ? $image_media['height'] : 0;
	endif;

	$ratio = 0;
	if( $image_width ) :
		$ratio = ( $image_height / $image_width ) * 100;
	endif;
endif;
?>

<div id="single-image-<?php echo esc_attr( $id ); ?>" class="sh-single-image<?php echo esc_attr( $class ) . esc_attr( $animated ); ?>"<?php echo wp_kses_post( $animated_speed ) . wp_kses_post( $animated_delay ); ?>>
	<?php if( isset($atts['popover']) && $atts['popover']) : ?>
		<div class="sh-popover-mini"><?php echo esc_attr( $atts['popover'] ); ?></div>
	<?php endif; ?>

	<?php if( $lazy && $image_width > 0 ) : ?>
		<div class="sh-image-lazy-loading" style="max-width: <?php echo esc_attr( $image_width ); ?>px;">
	<?php endif; ?>

		<div class="sh-single-image-container<?php echo ( $lazy) ? ' sh-single-image-container-lazy' : ''; ?>">
			<?php if( jevelin_get_image( $atts['image'] ) ) : ?>
				<?php if( $atts['url'] ) : ?>
					<a href="<?php echo esc_url( $atts['url'] ); ?>">
				<?php elseif( $atts['lightbox'] == true ) : ?>
					<a href="<?php echo esc_url( jevelin_get_image( $atts['image'] ) ); ?>" rel="lightbox">
				<?php endif; ?>

					<?php if( $lazy ) :?>
						<?php if( $image_width > 0 ) : ?>
							<div class="ratio-container" style="padding-top: <?php echo esc_attr( $ratio ); ?>%;">
								<div class="ratio-content">
									<img class="sh-image-url lazy" data-src="<?php echo esc_url( jevelin_get_image_size($atts['image'], $size ) ); ?>" alt="<?php echo esc_attr( jevelin_get_image_alt( $atts['image'] ) ); ?>" />
								</div>
							</div>
						<?php else : ?>
							<img class="sh-image-url lazy" data-src="<?php echo esc_url( jevelin_get_image_size($atts['image'], $size ) ); ?>" alt="<?php echo esc_attr( jevelin_get_image_alt( $atts['image'] ) ); ?>" />
						<?php endif; ?>

						<?php if( jevelin_get_image($atts['image_hover']) ) : ?>
							<img class="sh-image-hover lazy" data-src="<?php echo esc_url( jevelin_get_image_size($atts['image_hover'], $size ) ); ?>" zalt="<?php echo esc_attr( jevelin_get_image_alt( $atts['image'] ) ); ?>" />
						<?php endif; ?>
					<?php else :?>
						<img class="sh-image-url" src="<?php echo esc_url( jevelin_get_image_size($atts['image'], $size ) ); ?>" alt="<?php echo esc_attr( jevelin_get_image_alt( $atts['image'] ) ); ?>" />
						<?php if( jevelin_get_image($atts['image_hover']) ) : ?>
							<img class="sh-image-hover" src="<?php echo esc_url( jevelin_get_image_size($atts['image_hover'], $size ) ); ?>" alt="<?php echo esc_attr( jevelin_get_image_alt( $atts['image'] ) ); ?>" />
						<?php endif; ?>
					<?php endif; ?>

				<?php if( $atts['lightbox'] == true || $atts['url'] ) : ?>
					</a>
				<?php endif; ?>
			<?php endif; ?>

			<?php if( $overlay == 'overlay1' || $overlay == 'overlay2' ) : ?>
				<?php if( $atts['lightbox'] == true ) : ?>
					<a class="sh-single-image-overlay" href="<?php echo esc_url( jevelin_get_image($atts['image']) ); ?>" rel="lightbox" class="sh-single-image-overlay">
				<?php elseif( $atts['url'] ) : ?>
					<a class="sh-single-image-overlay" href="<?php echo esc_url( $atts['url'] ); ?>">
				<?php else : ?>
					<a class="sh-single-image-overlay">
				<?php endif; ?>
					<?php if( $overlay == 'overlay1' ) : ?>
						<div class="sh-custom-button-preset1">
							<span><?php echo esc_attr( $overlay_atts['button_name'] ); ?></span>
							<?php if( $overlay_atts['button_icon'] ) : ?>
								<i class="<?php echo esc_attr( $overlay_atts['button_icon'] ); ?>"></i>
							<?php endif; ?>
						</div>
					<?php else : ?>
						<div class="sh-custom-button-preset2">
						</div>
					<?php endif; ?>
				</a>
			<?php endif; ?>
		</div>

	<?php if( $lazy && $image_width > 0 ) : ?>
		</div>
	<?php endif; ?>

</div>
