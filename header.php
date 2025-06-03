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

        <header id="masthead" class="site-header">
            <div class="header-content">
                <div class="site-branding">
                    <?php if (has_custom_logo()) : ?>
                    <div class="site-logo">
                        <?php the_custom_logo(); ?>
                    </div>
                    <?php endif; ?>

                    <div class="site-title-wrapper">
                        <?php if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title"><a
                                href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
                        <?php else : ?>
                        <p class="site-title"><a
                                href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></p>
                        <?php endif; ?>

                        <?php $description = get_bloginfo('description', 'display'); ?>
                        <?php if ($description || is_customize_preview()) : ?>
                        <p class="site-description"><?php echo $description; ?></p>
                        <?php endif; ?>
                    </div>
                </div><!-- .site-branding -->

                <?php if (has_nav_menu('primary')) : ?>
                <nav id="site-navigation" class="main-navigation"
                    aria-label="<?php esc_attr_e('Primary Menu', 'bring-your-child'); ?>">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="menu-toggle-text"><?php esc_html_e('Menu', 'bring-your-child'); ?></span>
                        <span class="menu-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'primary-menu',
                        'container'      => false,
                    ));
                    ?>
                </nav><!-- #site-navigation -->
                <?php endif; ?>
            </div><!-- .header-content -->
        </header><!-- #masthead -->

        <div id="primary" class="content-area">
            <main id="main" class="site-main">