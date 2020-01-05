<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <!--[if IE]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php //hook for plugins, compatible with WP < 5.2
        if( function_exists( 'wp_body_open' ) ){
            wp_body_open();
        } else {
            do_action( 'wp_body_open' );
        } ?>
        <div id="wrapper">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'beachfire' ); ?></a>
            <header id="masthead" class="site-header">
                <div class="site-branding">
                    <?php if ( is_front_page() && is_home() ) { ?>
                	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php }	else { ?>
                    <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
                    <?php } ?>
                    <div class="site-description"><?php echo bloginfo( 'description' ); ?></div>
                </div><!-- .site-branding -->

		        <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'beachfire' ); ?></button>
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		        </nav><!-- #site-navigation -->
	        </header><!-- #masthead -->

	        <div id="container" class="site-content">