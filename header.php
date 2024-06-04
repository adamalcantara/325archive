<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="page" class="site">
        <!-- The header of the website -->
            <header>
                <section class="top-bar">
                    <div class="logo">
                        Logo
                    </div>
                    <!-- The menu -->
                    <div class="menu-area">
                        <nav class="main-menu">
                            <button class="check-button">
                                <div class="menu-icon">
                                    <div class="bar1"></div>
                                    <div class="bar2"></div>
                                    <div class="bar3"></div>
                                </div>
                            </button>
                            <?php wp_nav_menu( array( 'theme_location' => 'guitararchive_main_menu', 'depth' => 2 )); ?>
                        </nav>
                    </div>
                </section>
            </header>