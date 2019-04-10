<div class="sh-header-builder-main sh-header-builder-layout<?php echo esc_attr( $header_layout ); ?> <?php echo implode( ' ', $element_main_class ); ?>">
    <div class="sh-header-builder-main-container">
        <div class="container">
            <div class="sh-header-builder-main-content">
                <?php if( $header_layout == 7 ) : ?>

                    <div class="sh-header-builder-main-logo">
                        <?php jevelin_header_logo(); ?>
                    </div>
                    <div class="sh-header-builder-main-content-center">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation ); ?>
                            </div>
                        </div>

                    </div>

                <?php elseif( $header_layout == 6 ) : ?>

                    <div class="sh-header-builder-main-content-left">

                        <div class="sh-header-builder-main-navigation text-right">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation_left ); ?>
                            </div>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-center">

                        <div class="sh-header-builder-main-logo">
                            <?php echo ( $div_logo ); ?>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-right">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation_right ); ?>
                            </div>
                        </div>

                    </div>

                <?php elseif( $header_layout == 5 ) : ?>

                    <div class="sh-header-builder-main-content-left">

                        <div class="sh-header-builder-main-logo">
                            <?php echo ( $div_logo ); ?>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-right">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation ); ?>
                            </div>
                        </div>

                    </div>

                <?php elseif( $header_layout == 4 ) : ?>

                    <div class="sh-header-builder-main-content-left">

                        <div class="sh-header-builder-main-navigation text-right">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation_left ); ?>
                            </div>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-center">

                        <div class="sh-header-builder-main-logo">
                            <?php echo ( $div_logo ); ?>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-right">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation_right ); ?>
                            </div>
                        </div>

                    </div>

                <?php elseif( $header_layout == 3 ) : ?>

                    <div class="sh-header-builder-main-logo">
                        <?php echo ( $div_logo ); ?>
                    </div>
                    <div class="sh-header-builder-main-content-center">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation ); ?>
                            </div>
                        </div>

                    </div>

                <?php elseif( $header_layout == 2 ) : ?>

                    <div class="sh-header-builder-main-content-left">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation ); ?>
                            </div>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-right">

                        <div class="sh-header-builder-main-logo">
                            <?php echo ( $div_logo ); ?>
                        </div>

                    </div>

                <?php else : ?>

                    <div class="sh-header-builder-main-content-left">

                        <div class="sh-header-builder-main-logo">
                            <?php echo ( $div_logo ); ?>
                        </div>

                    </div>
                    <div class="sh-header-builder-main-content-right">

                        <div class="sh-header-builder-main-navigation">
                            <div class="sh-header-builder-main-navigation-alignment">
                                <?php echo ( $div_navigation ); ?>
                            </div>
                        </div>

                    </div>

                <?php endif; ?>
            </div>
        </div>

        <?php
            /* Header popup search */
            set_query_var( 'header_builder_search', 1 );
            get_template_part('inc/headers/header-search');
        ?>
    </div>
</div>
