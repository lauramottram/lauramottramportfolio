<?php
$div_mobile_navigation_menu = '
<div class="sh-header-builder-mobile-element sh-header-builder-mobile-menu" style="cursor: pointer;">
    <span class="c-hamburger c-hamburger--htx">
        <span>Toggle menu</span>
    </span>
</div>';

$div_mobile_navigation_cart = '';
if( $header_nav_cart_hidden != true ) :
    $div_mobile_navigation_cart = '
    <div class="sh-header-builder-mobile-element sh-header-builder-mobile-element-cart sh-nav-container">
        <ul class="sh-nav">

            <li class="menu-item sh-nav-cart sh-nav-special sh-header-builder-mobile-element-cart">
                <a href="'.wc_get_cart_url().'">
                    <i class="icon-basket sh-header-builder-mobile-element-icon"></i>
                    <div class="sh-header-cart-count cart-icon sh-group">

                        <span>'.WC()->cart->cart_contents_count.'</span>

                    </div>
                </a>
            </li>

        </ul>
    </div>';
endif;


// Header - Logo
$div_logo_mobile = '<div class="sh-header-builder-logo">';
    $div_logo_mobile.= '<a href="'. esc_url( home_url( '/' ) ) .'">';

        $standard_url = get_template_directory_uri().'/img/logo.png';

        // standard
        $url = ( is_numeric( $header_logo ) && jevelin_get_small_thumb( $header_logo ) ) ? jevelin_get_small_thumb( $header_logo ) : $standard_url;
        $div_logo_mobile.= '<img src="'.esc_url( $url ).'" class="sh-header-builder-logo-standard" />';

        // sticky
        $url = ( is_numeric( $header_logo_sticky ) && jevelin_get_small_thumb( $header_logo_sticky ) ) ? jevelin_get_small_thumb( $header_logo_sticky ) : $url;
        $div_logo_mobile.= '<img src="'.esc_url( $url ).'" class="sh-header-builder-logo-sticky" />';

    $div_logo_mobile.= '</a>';
$div_logo_mobile.= '</div>';


//
if( $mobile_sticky_header != 'default' ) :
    $mobile_sticky_header_class = ( $mobile_sticky_header == 'enabled' ) ? ' sh-header-builder-mobile-sticky-enabled' : '';
else :
    $mobile_sticky_header_class = ( $header_sticky == 'enabled' ) ? ' sh-header-builder-mobile-sticky-enabled' : '';
endif;
?>


<div class="sh-header-builder-mobile <?php echo esc_attr( $mobile_sticky_header_class ); ?>">
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
                        <?php echo ( $div_logo ); ?>
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
                        <?php echo ( $div_logo ); ?>
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
                        <?php echo ( $div_logo ); ?>
                    </div>

                </div>

            <?php else : ?>

                <div class="sh-header-builder-mobile-content-left">

                    <div class="sh-header-builder-mobile-logo">
                        <?php echo ( $div_logo ); ?>
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
