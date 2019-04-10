<?php
/**
 * Footer
 */
wp_reset_postdata();
$footer_template = ( jevelin_option( 'footer_template' ) != 'default' ) ? jevelin_option( 'footer_template' ) : 'default';
$footer_template_id = intval( str_replace( 'footer-', '', $footer_template ) );
?>

	<?php if( jevelin_post_option( get_the_ID(), 'page_layout' ) != 'full' ) : ?>
		</div>
	<?php endif; ?>
	</div>

		<?php if( !in_array( get_post_type( get_the_ID() ), array( 'shufflehound_header', 'shufflehound_footer' ) ) ) : ?>
			<?php if( is_numeric( $footer_template ) && get_post_status( $footer_template ) == 'publish' ) : ?>

				<div class="sh-footer-template">
					<div class="container">
						<?php if( current_user_can( 'manage_options' ) ) : ?>
							<a target="_blank" href="<?php echo admin_url( 'post.php?vc_action=vc_inline&post_id='.intval( $footer_template_id ).'&post_type=shufflehound_footer' ); ?>" class="sh-header-builder-edit">
								<i class="ti-pencil"></i>
								<?php esc_html_e( 'Edit Footer', 'jevelin' ); ?>
							</a>
						<?php endif; ?>
						<?php
							Vc_Manager::getInstance()->vc()->addShortcodesCustomCss( $footer_template );
						    $the_post = get_post( $footer_template );
							echo do_shortcode(  apply_filters( 'the_content', $the_post->post_content ) );
						?>
					</div>
				</div>

			<?php else : ?>

				<footer class="sh-footer">
					<?php if( jevelin_footer_enabled() == 'on' ) : ?>

						<div class="sh-footer-widgets">
							<div class="container">
								<div class="sh-footer-columns">
									<?php
										/* Show theme footer widgets */
										if( is_active_sidebar( 'footer-widgets' ) ) :
											dynamic_sidebar( 'footer-widgets' );
										elseif( is_active_sidebar( 'footer_widgets' ) ) :
											dynamic_sidebar( 'footer_widgets' );
										endif;
									?>
								</div>
							</div>
						</div>

					<?php endif; ?>
					<?php
						if( jevelin_copyrights_enabled() == 'on' ) :
							/* Inlcude theme copyrights bar */
							get_template_part('inc/templates/copyrights' );
						endif;
					?>
				</footer>

			<?php endif; ?>
		<?php endif; ?>
	</div>


	<?php if( jevelin_post_option( get_the_ID(), 'back_to_top' ) != 'none' ) :

		/* Inlcude back to top button HTML */
		get_template_part('inc/templates/back_to_top' );

	endif; ?>
</div>

<?php wp_footer(); ?>

</body>
</html>