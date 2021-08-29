<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div class="top-bar">
                <div class="addy">
                    <a href="" class="icon">
                        <img src="/wp-content/themes/Constructo/assets/img/pin.png" alt="">
                    </a>

                    <p>9051 Constra Incorporate, USA</p>
                </div>
                <div class="social">
                    <a href="" class="icon">
                        <img src="/wp-content/themes/Constructo/assets/img/facebook.png" alt="">
                    </a>
                    <a href="" class="icon">
                        <img src="/wp-content/themes/Constructo/assets/img/instagram.png" alt="">
                    </a>
                    <a href="" class="icon">
                        <img src="/wp-content/themes/Constructo/assets/img/twitter.png" alt="">
                    </a>
                    <a href="" class="icon">
                        <img src="/wp-content/themes/Constructo/assets/img/linkedin.png" alt="">
                    </a>
                </div>

            </div>
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '<h1>';
                    }
                    echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html(get_bloginfo('name')) . '</span></a>';
                    if (is_front_page() || is_home() || is_front_page() && is_home()) {
                        echo '</h1>';
                    }
                    ?>
                </div>
            </div>
            <div class="contact-us">
                <div class="call">
                    <span>Call Us</span>
                    <a href="tel:404-784-7754">404-784-7754</a>
                </div>
                <div class="email">
                    <span>Email Us</span>
                    <a href="mailto:barguzman@comcast.net">barguzman@comcast.net</a>
                </div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu(array('theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>

            </nav>
        </header>
        <div id="container">