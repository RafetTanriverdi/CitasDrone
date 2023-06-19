<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
    <div class="container fixed-top nav-cont">
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
            <?php if (get_theme_mod('custom_logo')) : ?>
                <?php $custom_logo_id = get_theme_mod('custom_logo'); ?>
                <?php $logo_image = wp_get_attachment_image_src($custom_logo_id, 'full'); ?>
                <img src="<?php echo $logo_image[0]; ?>" alt="Logo" class="logo-img">
            <?php else : ?>
                <span class="logo-text"><?php bloginfo('name'); ?></span>
            <?php endif; ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'header-menu',
                'depth'           => 2,
                'container'       => '',
                'menu_class'      => 'navbar-nav',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker()
            ));
            ?>
        </div>
    </div>
</nav>
