<?php
// Params extraction
extract( shortcode_atts( array(
    // Header
    'width' => 'standard',
    'header_layout' => '1',
    'header_preset' => 'dark',
    'header_height' => '70px',
    'header_font_size' => '',
    'header_icon_size' => '',
    'header_background_color' => '',
    'header_element_spacing' => 'standard',
    'header_nav_spacing' => 'standard',
    'header_icon_color' => '',
    'header_icon_hover_color' => '',
    'header_cart_bubble_color' => '',
    'header_nav_letter_spacing' => '',
    'header_sticky' => 'disabled',
    'header_above_content' => 'disabled',
    'header_shadow' => 'disabled',
    'header_icon_pack' => 'simple',

    'header_logo' => '',
    'header_logo_sticky' => '',
    'header_logo_responsive' => '',

    'header_nav_font_family' => 'body',
    'header_nav_font_weight' => '400',
    'header_nav_font_weight_active' => 'disabled',
    'header_nav_text_color' => '',
    'header_nav_text_hover_color' => '',
    'header_nav_search_hidden' => false,
    'header_nav_social_hidden' => false,
    'header_nav_cart_hidden' => false,

    'dropdown_style' => '2',
    'dropdown_background_color' => '',
    'dropdown_link_color' => '',
    'dropdown_link_active_color' => '',
    'dropdown_link_hover_color' => '',
    'dropdown_title_color' => '',
    'dropdown_border_color' => '',
    'header_nav_elements_spacing' => '0px',
    'header_bottom_border_color' => '',

    'sticky_height' => '60px',
    'sticky_shadow' => 'disabled',
    'sticky_background_color' => '#ffffff',
    'sticky_nav_text_color' => '',
    'sticky_nav_text_hover_color' => '',


    // Topbar
    'topbar_hidden' => false,
    'topbar_height' => '40px',
    'topbar_font_size' => '',
    'topbar_icon_size' => '',
    'topbar_weight' => '',
    'topbar_background_color' => '',
    'topbar_text_color' => '',

    'topbar_contact_location' => '',
    'topbar_contact_email' => 'info@your-email',
    'topbar_contact_phone' => '',
    'topbar_contact_working_hours' => '',
    'topbar_contacts_icon_color' => '',
    'topbar_contacts_icon_hover_color' => '',
    'topbar_contacts_letter_spacing' => '',

    'social_facebook' => '#',
    'social_twitter' => '#',
    'social_youtube' => '#',
    'social_instagram' => '#',
    'social_pinterest' => '',

    'topbar_navigation_uppercase' => false,
    'topbar_navigation_weight' => '400',
    'topbar_navigation_text_hover_color' => '',

    'topbar_buttons' => array(),
    'topbar_buttons_weight' => '400',
    'topbar_buttons_style' => 'dark',
    'topbar_buttons_radius' => '8px',
    'topbar_button_text_color' => '',
    'topbar_button_text_hover_color' => '',
    'topbar_button_background_color' => '',
    'topbar_button_background_hover_color' => '',
    'topbar_button_uppercase' => false,

    'topbar_contacts_position' => 'left',
    'topbar_social_position' => 'left',
    'topbar_navigation_position' => 'right',
    'topbar_buttons_position' => 'right',
    'topbar_contacts_hidden' => false,
    'topbar_social_hidden' => false,
    'topbar_navigation_hidden' => false,
    'topbar_buttons_hidden' => false,


    // Responsive
    'mobile_header_layout' => '1',
    'mobile_dropdown_search_hidden' => false,
    'mobile_dropdown_social_hidden' => false,
    'mobile_height' => '70px',
    'mobile_icon_size' => '',
    'mobile_icon_color' => '',
    'mobile_icon_hover_color' => '',
    'mobile_background_color' => '',


    // Search
    'search_background' => '#ffffff',
    'search_text_color' => '',
    'search_text_placholder_color' => '',
    'search_search_icon_color' => '',
    'search_close_icon_color' => '',


    // Design Options
    'css' => 'none',
), $atts ) );


// HTML
$id = 'sh-header-builder-'.jevelin_rand();
$element_main_class = array();
$element_class = array();
$element_class[] = $id;
$element_class[] = 'sh-header-builder-main-spacing-'.esc_attr( $header_element_spacing );
$element_class[] = 'sh-header-builder-main-nav-spacing-'.esc_attr( $header_nav_spacing );
$element_main_class[] = 'sh-header-builder-main-sticky-'.esc_attr( $header_sticky );
$element_main_class[] = 'sh-header-megamenu-style'.intval( $dropdown_style );
if( $header_above_content == 'enabled' ) :
    $element_class[] = 'sh-header-builder-main-above-content';
endif;
if( $header_shadow != 'disabled' ) :
    $element_main_class[] = 'sh-header-builder-main-shadow-'.$header_shadow;
endif;
if( $sticky_shadow != 'disabled' ) :
    $element_main_class[] = 'sh-header-builder-main-sticky-shadow-'.$sticky_shadow;
endif;



if( intval( $header_icon_size ) < 20 ) :
    $element_class[] = 'sh-header-builder-main-icons-small';
endif;

$element_class[] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
if( $topbar_buttons ) :
    $topbar_buttons = vc_param_group_parse_atts( $topbar_buttons );
endif;


if( $header_icon_pack == 'themify' ) :
    $icon = (object)array(
        'facebook' => 'ti-facebook',
        'twitter' => 'ti-twitter',
        'youtube' => 'ti-youtube',
        'instagram' => 'ti-instagram',
        'pinterest' => 'ti-pinterest',
        'search' => 'ti-search',
        'cart' => 'ti-shopping-cart',
    );
else :
    $icon = (object)array(
        'facebook' => 'icon-social-facebook',
        'twitter' => 'icon-social-twitter',
        'youtube' => 'icon-social-youtube',
        'instagram' => 'icon-social-instagram',
        'pinterest' => 'icon-social-pinterest',
        'search' => 'icon-magnifier',
        'cart' => '',
    );
endif;


$socials = array(
    array(
        'link' => $social_facebook,
        'icon' => $icon->facebook
    ),
    array(
        'link' => $social_twitter,
        'icon' => $icon->twitter
    ),
    array(
        'link' => $social_youtube,
        'icon' => $icon->youtube
    ),
    array(
        'link' => $social_instagram,
        'icon' => $icon->instagram
    ),
    array(
        'link' => $social_pinterest,
        'icon' => $icon->pinterest
    ),
);




// Preset
if( $header_preset == 'dark-transparent' ) :
    $colors = (object)array(
        'header_nav_text_color' => '#7e7e7e',
        'header_background_color' => 'transparent',
    );
elseif( $header_preset == 'light-transparent' ) :
    $colors = (object)array(
        'header_nav_text_color' => '#ffffff',
        'header_background_color' => 'transparent',
    );
elseif( $header_preset == 'light' ) :
    $colors = (object)array(
        'header_nav_text_color' => '#ffffff',
        'header_background_color' => '#23282d',
    );
else :
    $colors = (object)array(
        'header_nav_text_color' => '#7e7e7e',
        'header_background_color' => '#ffffff',
    );
endif;


// Colors
if( $header_nav_text_color ) :
    $colors->header_nav_text_color = $header_nav_text_color;
endif;

if( $header_background_color ) :
    $colors->header_background_color = $header_background_color;
endif;










// Topbar - Contacts
$div_contacts = '';
$contacts_classes = array();
if( $topbar_contacts_hidden != true ) :
    $div_contacts = '<div class="sh-header-builder-topbar-group" style="display: inline-block;"><div class="sh-header-builder-contacts">';

    if( $topbar_contact_location ) :
        $div_contacts.= '<div><i class="icon-location-pin"></i><span>'.$topbar_contact_location.'</span></div>';
    endif;

    if( $topbar_contact_email ) :
        $div_contacts.= '<div><i class="icon-envelope-open"></i><span>'.$topbar_contact_email.'</span></div>';
    endif;

    if( $topbar_contact_phone ) :
        $div_contacts.= '<div><i class="icon-call-in"></i><span>'.$topbar_contact_phone.'</span></div>';
    endif;

    if( $topbar_contact_working_hours ) :
        $div_contacts.= '<div><i class="icon-clock"></i><span>'.$topbar_contact_working_hours.'</span></div>';
    endif;

    $div_contacts.= '</div></div>';
endif;


// Topbar - Social Icons
$div_social = '';
$social_classes = array();
if( $topbar_social_hidden != true ) :
    $div_social = '<div class="sh-header-builder-topbar-group" style="display: inline-block;"><div class="sh-header-builder-social sh-header-builder-contacts '.implode( ' ', $social_classes ).'">';
    foreach( $socials as $social ) :
        if( isset( $social['link'] ) && $social['link'] ) :
            $div_social.= '
            <a href="'.$social['link'].'" target="_blank">
                <i class="'.$social['icon'].'"></i>
            </a>';
        endif;
    endforeach;
    $div_social.= '</div></div>';
endif;


// Topbar - Buttons
$div_buttons = '';
$buttons_classes = array();
if( $topbar_buttons_hidden != true ) :
    $buttons_classes[] = ( $topbar_buttons_style ) ? 'sh-header-builder-buttons-style-'.$topbar_buttons_style : '';
    $div_buttons = '<div class="sh-header-builder-topbar-group" style="display: inline-block;"><div class="sh-header-builder-buttons sh-header-builder-contacts '.implode( ' ', $buttons_classes ).'">';

    foreach( $topbar_buttons as $button ) :
        $div_buttons.= '<a href="'.$button['link'].'">'.$button['name'].'</a>';
    endforeach;

    $div_buttons.= '</div></div>';
endif;


// Topbar - Navigation
$div_topbar_navigation = '';
if( $topbar_navigation_hidden != true ) :
    $topbar_navigation_uppercase = ( $topbar_navigation_uppercase ) ? ' sh-text-uppercase' : '';

    $div_topbar_navigation = wp_nav_menu( array(
        'theme_location' => 'topbar',
        'depth' => 1,
        'container_class' => 'sh-header-builder-topbar-group'.$topbar_navigation_uppercase,
        'menu_class' => 'sh-topbar-nav',
        'echo' => false
    ));
endif;


// Topbar - Positions
$topbar = (object)array(
    'left' => '',
    'center' => '',
    'right' => '',
);
if( $topbar_contacts_position == 'right' ) :
    $topbar->right.= $div_contacts;
else :
    $topbar->left.= $div_contacts;
endif;

if( $topbar_social_position == 'right' ) :
    $topbar->right.= $div_social;
else :
    $topbar->left.= $div_social;
endif;

if( $topbar_navigation_position == 'right' ) :
    $topbar->right.= $div_topbar_navigation;
else :
    $topbar->left.= $div_topbar_navigation;
endif;

if( $topbar_buttons_position == 'right' ) :
    $topbar->right.= $div_buttons;
else :
    $topbar->left.= $div_buttons;
endif;



// Header - Logo
$div_logo = '<div class="sh-header-builder-logo">';

    $standard_url = get_template_directory_uri().'/img/logo.png';

    // standard
    $url = ( is_numeric( $header_logo ) && jevelin_get_small_thumb( $header_logo ) ) ? jevelin_get_small_thumb( $header_logo ) : $standard_url;
    $div_logo.= '<img src="'.esc_url( $url ).'" class="sh-header-builder-logo-standard" />';

    // sticky
    $url = ( is_numeric( $header_logo_sticky ) && jevelin_get_small_thumb( $header_logo_sticky ) ) ? jevelin_get_small_thumb( $header_logo_sticky ) : $standard_url;
    $div_logo.= '<img src="'.esc_url( $url ).'" class="sh-header-builder-logo-sticky" />';

$div_logo.= '</div>';



// Header - Navigation
$div_navigation_elements = '';
$div_navigation = '';
if ( has_nav_menu( 'header' ) ) :
    $div_navigation = wp_nav_menu( array(
        'theme_location' => 'header',
        'depth' => 4,
        'container_class' => 'sh-header-builder-main-element sh-header-builder-main-element-navigation sh-nav-container',
        'menu_class' => 'sh-nav',
        'echo' => false
    ));
endif;



// Header - Logo in center of navigation
$div_navigation_left = '';
$div_navigation_right = '';
$div_navigation_elements_left = '';
$div_navigation_elements_right = '';
if( in_array( $header_layout, array( 4, 6 ) ) ) :

    // Header - Navigation Left Side
    if ( has_nav_menu( 'header-left' ) ) :
        $div_navigation_left = wp_nav_menu( array(
            'theme_location' => 'header-left',
            'depth' => 4,
            'container_class' => 'sh-header-builder-main-element sh-header-builder-main-element-navigation sh-nav-container',
            'menu_class' => 'sh-nav',
            'echo' => false
        ));
    endif;

    // Header - Navigation Right Side
    if ( has_nav_menu( 'header-right' ) ) :
        $div_navigation_right = wp_nav_menu( array(
            'theme_location' => 'header-right',
            'depth' => 4,
            'container_class' => 'sh-header-builder-main-element sh-header-builder-main-element-navigation sh-nav-container',
            'menu_class' => 'sh-nav',
            'echo' => false
        ));
    endif;
endif;



// Header - Navigation Element - Social Media
if( $header_nav_social_hidden != true ) :
    $self = '';
    foreach( $socials as $social ) :
        if( isset( $social['link'] ) && $social['link'] ) :
            $self.= '
            <div class="sh-header-builder-main-element sh-header-builder-main-element-social">
                <a href="'.$social['link'].'" target="_blank">
                    <i class="'.$social['icon'].' sh-header-builder-main-element-icon"></i>
                </a>
            </div>';
        endif;
    endforeach;
    $div_navigation_elements.= $self;
    $div_navigation_elements_left.= $self;
endif;


// Header - Navigation Element - Search
if( $header_nav_search_hidden != true ) :
    $self = '
    <div class="sh-header-builder-main-element sh-header-builder-main-element-search sh-nav-container">
        <ul class="sh-nav">
            <li class="menu-item sh-nav-search sh-header-builder-search-trigger">
                <a href="#"><i class="'.$icon->search.' sh-header-builder-main-element-icon"></i></a>
            </li>
        </ul>
    </div>';
    $div_navigation_elements.= $self;
    $div_navigation_elements_right.= $self;
endif;


// Header - Navigation Element - Cart
if( $header_nav_cart_hidden != true ) :
    $self = '
    <div class="sh-header-builder-main-element sh-header-builder-main-element-cart sh-nav-container">
        <ul class="sh-nav">
            '.jevelin_nav_wrap_cart( NULL, 1 ).'
        </ul>
    </div>';
    $div_navigation_elements.= $self;
    $div_navigation_elements_right.= $self;
endif;


// Add elements to navigation
$header_nav_divider = '<div class="sh-header-builder-main-element sh-header-builder-main-element-divider"></div>';
if( $div_navigation_elements ) :
    $div_navigation.= $header_nav_divider.$div_navigation_elements;
endif;
if( $div_navigation_elements_left ) :
    $div_navigation_left.= $header_nav_divider.$div_navigation_elements_left;
endif;
if( $div_navigation_elements_right ) :
    $div_navigation_right.= $header_nav_divider.$div_navigation_elements_right;
endif;








$div_mobile_navigation_menu = '
<div class="sh-header-builder-mobile-element sh-header-builder-mobile-menu" style="cursor: pointer;">
    <span class="c-hamburger c-hamburger--htx">
        <span>Toggle menu</span>
    </span>
</div>';

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
