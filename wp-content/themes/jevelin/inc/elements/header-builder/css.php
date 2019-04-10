<?php
$css = array();
$css['.sh-header-builder-topbar'] = array(
    'color' => $topbar_text_color,
    'background-color' => $topbar_background_color,
    'min-height' => $topbar_height,
    'font-size' => $topbar_font_size,
    'font-weight' => $topbar_weight,
);

$css['.sh-header-builder-topbar i'] = array(
    'font-size' => $topbar_icon_size,
);

// var_dump( $css );
?>


<style media="screen">
/* Topbar */
<?php if( $width == 'full' ) : ?>
    #<?php echo esc_attr( $id ); ?> .container {
        width: 100%!important;
        min-width: 100%!important;
        max-width: 100%!important;
        padding-left: 30px!important;
        padding-right: 30px!important;
    }
<?php endif; ?>

#<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar {
    color: <?php echo esc_attr( $topbar_text_color ); ?>;
    background-color: <?php echo esc_attr( $topbar_background_color ); ?>;
    min-height: <?php echo esc_attr( $topbar_height ); ?>;
    font-size:  <?php echo esc_attr( $topbar_font_size ); ?>;
    font-weight:  <?php echo esc_attr( $topbar_weight ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar i {
    font-size:  <?php echo esc_attr( $topbar_icon_size ); ?>;
}


/* Topbar - Navigation */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-topbar-nav a {
    font-size:  <?php echo esc_attr( $topbar_font_size ); ?>;
    color: <?php echo esc_attr( $topbar_text_color ); ?>;
}

<?php if( $topbar_navigation_weight ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-topbar-nav a {
        font-weight: <?php echo esc_attr( $topbar_navigation_weight ); ?>
    }
<?php endif; ?>

<?php if( $header_nav_font_weight_active != 'disabled' ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header .sh-nav > .current_page_item > a {
        font-weight: <?php echo esc_attr( $header_nav_font_weight_active ); ?>
    }
<?php endif; ?>

<?php if( $topbar_navigation_text_hover_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-topbar-nav a:hover {
        color: <?php echo esc_attr( $topbar_navigation_text_hover_color ); ?>;
    }
<?php endif; ?>


/* Topbar - Buttons */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-header-builder-buttons a {
    color: <?php echo esc_attr( $topbar_button_text_color ); ?>;
    background-color: <?php echo esc_attr( $topbar_button_background_color ); ?>;
    font-weight: <?php echo esc_attr( $topbar_buttons_weight ); ?>;
    border-radius: <?php echo esc_attr( $topbar_buttons_radius ); ?>;
}

<?php if( $topbar_button_text_hover_color || $topbar_button_background_hover_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-header-builder-buttons a:hover {
        color: <?php echo esc_attr( $topbar_button_text_hover_color ); ?>;
        background-color: <?php echo esc_attr( $topbar_button_background_hover_color ); ?>;
    }
<?php endif; ?>

<?php if( $topbar_button_uppercase ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-topbar .sh-header-builder-buttons a {
        text-transform: uppercase;
    }
<?php endif; ?>


/* Topbar - Contacts */
<?php if( $topbar_contacts_letter_spacing ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-contacts span {
        letter-spacing: <?php echo esc_attr( $topbar_contacts_letter_spacing ); ?>!important;
    }
<?php endif; ?>

<?php if( $topbar_contacts_icon_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-contacts i {
        color: <?php echo esc_attr( $topbar_contacts_icon_color ); ?>;
    }
<?php endif; ?>

<?php if( $topbar_contacts_icon_hover_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-contacts a:hover i {
        color: <?php echo esc_attr( $topbar_contacts_icon_hover_color ); ?>;
    }
<?php endif; ?>


/* Main */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-container {
    background-color: <?php echo esc_attr( $colors->header_background_color ); ?>;
    min-height: <?php echo esc_attr( $header_height ); ?>;
    font-size: <?php echo esc_attr( $header_font_size ); ?>;
    <?php if( $header_bottom_border_color ) : ?>
        border-bottom: 1px solid <?php echo esc_attr( $header_bottom_border_color ); ?>;
    <?php endif; ?>
}

<?php if( $header_layout != 3 && $header_layout != 7 ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main-element-navigation ul.sh-nav > li > a {
        min-height: <?php echo esc_attr( $header_height ); ?>;
        line-height: <?php echo esc_attr( $header_height ); ?>;
    }
<?php endif; ?>

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main ul.sh-nav > li > a {
    color: <?php echo esc_attr( $colors->header_nav_text_color ); ?>!important;
    letter-spacing: <?php echo esc_attr( $header_nav_letter_spacing ); ?>!important;
    <?php if( $header_nav_font_family == 'heading' ) : ?>
        font-family: '<?php echo jevelin_option_value('styling_headings','family'); ?>'!important;
    <?php endif; ?>
    <?php if( $header_nav_font_weight != '400' ) : ?>
        font-weight: <?php echo intval( $header_nav_font_weight ); ?>!important;
    <?php endif; ?>
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main ul.sh-nav > li:hover > a {
    color: <?php echo esc_attr( $header_nav_text_hover_color ); ?>!important;
}

<?php if( $header_nav_font_weight_active != 'default' ) : ?>
    #<?php echo esc_attr( $id ); ?> ul.sh-nav > li.current_page_item > a,
    #<?php echo esc_attr( $id ); ?> ul.sh-nav > li.current-menu-ancestor > a {
        font-weight: <?php echo intval( $header_nav_font_weight_active ); ?>!important;
    }
<?php endif; ?>

#<?php echo esc_attr( $id ); ?> i.sh-header-builder-main-element-icon {
    font-size: <?php echo esc_attr( $header_icon_size ); ?>;
    color: <?php echo esc_attr( $header_icon_color ); ?>
}

#<?php echo esc_attr( $id ); ?> i.sh-header-builder-main-element-icon:hover {
    color: <?php echo esc_attr( $header_icon_hover_color ); ?>
}

<?php if( $header_cart_bubble_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main-element-cart .cart-icon span {
        background-color: <?php echo esc_attr( $header_cart_bubble_color ); ?>!important;
    }
<?php endif; ?>

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-element-divider {
    margin-right: <?php echo esc_attr( $header_nav_elements_spacing ); ?>!important;
}


/* Main - Dropdown */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main ul.sub-menu {
    background-color: <?php echo esc_attr( $dropdown_background_color ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation ul.sub-menu li.menu-item > a,
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation ul.sub-menu li.menu-item > a > i {
    color: <?php echo esc_attr( $dropdown_link_color ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation ul.sub-menu li.menu-item > a:hover,
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation ul.sub-menu li.menu-item > a:hover > i {
    color: <?php echo esc_attr( $dropdown_link_hover_color ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation ul.mega-menu-row .menu-item-has-children > a {
    color: <?php echo esc_attr( $dropdown_title_color ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation .mega-menu-row > li.menu-item,
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation .widget_shopping_cart_content p.buttons a:first-child {
    border-color: <?php echo esc_attr( $dropdown_border_color ); ?>!important;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation li.menu-item:not(.menu-item-cart) ul a:hover,
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main-navigation .menu-item-cart .total {
    border-bottom: <?php echo esc_attr( $dropdown_border_color ); ?>!important;
}


/* Main - Icons */
<?php if( $header_icon_pack == 'themify' ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-nav-cart-content i.icon-basket:before {
        content: "\e60d";
        font-family: 'themify';
        display: inline-block;
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
    }

    #<?php echo esc_attr( $id ); ?> .sh-nav li.menu-item-has-children > a:after,
    #<?php echo esc_attr( $id ); ?> .sh-nav li.menu-item li.menu-item-has-children > a:after {
        content: "\e64b";
        font-family: 'themify'!important;
    }
<?php endif; ?>


/* Header - Sticky */
<?php if( $header_sticky == 'enabled' ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main-sticky-fixed .sh-header-builder-main-container {
        background-color: <?php echo esc_attr( $sticky_background_color ); ?>;
        min-height: <?php echo esc_attr( $sticky_height ); ?>;
    }

    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main-sticky-fixed ul.sh-nav > li > a {
        color: <?php echo esc_attr( $sticky_nav_text_color ); ?>!important;
    }

    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main-sticky-fixed ul.sh-nav > li:hover > a {
        color: <?php echo esc_attr( $sticky_nav_text_hover_color ); ?>!important;
    }
<?php endif; ?>


/* Header - Search */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search {
    background-color: <?php echo esc_attr( $search_background ); ?>;
}

<?php if( $search_text_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search .sh-header-search-input {
        color: <?php echo esc_attr( $search_text_color ); ?>;
    }
<?php endif; ?>

<?php if( $search_text_placholder_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search .sh-header-search-input::-webkit-input-placeholder {
        color: <?php echo esc_attr( $search_text_placholder_color ); ?>;
    }

    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search .sh-header-search-input:-moz-placeholder {
        color: <?php echo esc_attr( $search_text_placholder_color ); ?>;
    }

    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search .sh-header-search-input::-moz-placeholder {
        color: <?php echo esc_attr( $search_text_placholder_color ); ?>;
    }

    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search .sh-header-search-input:-ms-input-placeholder {
        color: <?php echo esc_attr( $search_text_placholder_color ); ?>;
    }
<?php endif; ?>

<?php if( $search_search_icon_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .sh-header-search-submit i {
        color: <?php echo esc_attr( $search_search_icon_color ); ?>;
    }
<?php endif; ?>

<?php if( $search_close_icon_color ) : ?>
    #<?php echo esc_attr( $id ); ?> .sh-header-builder-main .close-header-search i {
        color: <?php echo esc_attr( $search_close_icon_color ); ?>;
    }
<?php endif; ?>


/* Mobile */
#<?php echo esc_attr( $id ); ?> .sh-header-builder-mobile-content {
    min-height: <?php echo esc_attr( $mobile_height ); ?>;
}

#<?php echo esc_attr( $id ); ?> .sh-header-builder-mobile {
    background-color: <?php echo esc_attr( $mobile_background_color ); ?>
}
#<?php echo esc_attr( $id ); ?> i.sh-header-builder-mobile-element-icon {
    font-size: <?php echo esc_attr( $mobile_icon_size ); ?>;
    color: <?php echo esc_attr( $mobile_icon_color ); ?>
}

#<?php echo esc_attr( $id ); ?> i.sh-header-builder-mobile-element-icon:hover {
    color: <?php echo esc_attr( $mobile_icon_hover_color ); ?>
}
</style>
