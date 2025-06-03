<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e('Skip to content', 'bring-your-child'); ?></a>

        <!-- Tailwind Test - Remove after confirming it works -->
        <div class="bg-green-500 text-white p-4 text-center font-bold">
            🎉 Local Tailwind CSS is working! This should be green with white text.
        </div>

        <header id="masthead" class="site-header bg-blue-500 text-white p-4 shadow-lg">
            <div class="header-content max-w-6xl mx-auto flex items-center justify-between">
                <div class="site-branding flex items-center space-x-4">
                    <?php if (has_custom_logo()) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php endif; ?>


                </div><!-- .site-branding -->

                <?php if (has_nav_menu('primary')) : ?>
                <nav id="site-navigation" class="main-navigation"
                    aria-label="<?php esc_attr_e('Primary Menu', 'bring-your-child'); ?>">
                    <button
                        class="menu-toggle bg-white text-blue-500 px-4 py-2 rounded-lg hover:bg-blue-50 transition-colors md:hidden"
                        aria-controls="primary-menu" aria-expanded="false">
                        <span
                            class="menu-toggle-text font-medium"><?php esc_html_e('Menu', 'bring-your-child'); ?></span>
                        <span class="menu-icon ml-2">
                            <span class="block w-5 h-0.5 bg-blue-500 mb-1"></span>
                            <span class="block w-5 h-0.5 bg-blue-500 mb-1"></span>
                            <span class="block w-5 h-0.5 bg-blue-500"></span>
                        </span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'primary-menu hidden md:flex space-x-6',
                        'container'      => false,
                    ));
                    ?>
                </nav><!-- #site-navigation -->
                <?php endif; ?>
            </div><!-- .header-content -->
        </header><!-- #masthead -->

        <div id="primary" class="content-area">
            <main id="main" class="site-main">