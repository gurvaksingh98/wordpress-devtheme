<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container nav-container">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">Gurvak Singh</a>
        </div>

        <nav class="nav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false
            ));
            ?>
        </nav>
    </div>
</header>