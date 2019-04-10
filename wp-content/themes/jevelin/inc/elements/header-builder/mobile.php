<div class="sh-header-builder-mobile" style="border-bottom: 1px solid #ccc;">
    <div class="sh-header-builder-mobile-container container">
        <div class="sh-header-builder-mobile-content sh-header-builder-layout<?php echo esc_attr( $mobile_header_layout ); ?>">
            <?php if( $mobile_header_layout == 4 ) : ?>

                <div class="sh-header-builder-mobile-content-left">

                    <div class="sh-header-builder-mobile-logo">
                        <?php echo ( $div_mobile_navigation_cart ); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-center">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php jevelin_header_logo(); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-right">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php echo ( $div_mobile_navigation_menu ); ?>
                    </div>

                </div>

            <?php elseif( $mobile_header_layout == 3 ) : ?>

                <div class="sh-header-builder-mobile-content-left">

                    <div class="sh-header-builder-mobile-logo">
                        <?php echo ( $div_mobile_navigation_menu ); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-center">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php jevelin_header_logo(); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-right">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php echo ( $div_mobile_navigation_cart ); ?>
                    </div>

                </div>

            <?php elseif( $mobile_header_layout == 2 ) : ?>

                <div class="sh-header-builder-mobile-content-left">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php echo ( $div_mobile_navigation_menu.$div_mobile_navigation_cart ); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-right">

                    <div class="sh-header-builder-mobile-logo">
                        <?php jevelin_header_logo(); ?>
                    </div>

                </div>

            <?php else : ?>

                <div class="sh-header-builder-mobile-content-left">

                    <div class="sh-header-builder-mobile-logo">
                        <?php jevelin_header_logo(); ?>
                    </div>

                </div>
                <div class="sh-header-builder-mobile-content-right">

                    <div class="sh-header-builder-mobile-navigation">
                        <?php echo ( $div_mobile_navigation_menu.$div_mobile_navigation_cart ); ?>
                    </div>

                </div>

            <?php endif; ?>
        </div>
    </div>
    <nav class="sh-header-mobile-dropdown">
        <div class="container sh-nav-container">

            <ul class="sh-nav-mobile"></ul>

        </div>

        <?php if( $mobile_dropdown_social_hidden != true ) : ?>
            <div class="container sh-nav-container">

                <div class="header-mobile-search">
                    <form role="search" method="get" class="header-mobile-form" action="<?php echo esc_url( home_url('/') ); ?>">
                        <input class="header-mobile-form-input" type="text" placeholder="<?php esc_html_e( 'Search here..', 'jevelin' ); ?>" value="" name="s" required />
                        <button type="submit" class="header-mobile-form-submit">
                            <i class="icon-magnifier"></i>
                        </button>
                    </form>
                </div>

            </div>
        <?php endif; ?>

        <?php if( $mobile_dropdown_search_hidden != true && is_array( $socials ) && count( $socials ) ) : ?>
            <div class="header-mobile-social-media">

                <?php
                    foreach( $socials as $social ) :
                        if( isset( $social['link'] ) && $social['link'] ) :
                            echo '
                            <a href="'.$social['link'].'" target="_blank" class="social-media-twitter">
                                <i class="'.$social['icon'].'"></i>
                            </a>';
                        endif;
                    endforeach;
                ?>

            </div>
        <?php endif; ?>
    </nav>
</div>
