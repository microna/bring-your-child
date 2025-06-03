<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="header-content">
            <h1 class="site-title">
                <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <?php if (get_bloginfo('description')) : ?>
            <p class="site-description"><?php bloginfo('description'); ?></p>
            <?php endif; ?>
        </div>
    </header>
</body>

</html>