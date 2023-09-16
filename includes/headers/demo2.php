<?php
/**
 * @package Standard
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- <meta charset="<?php bloginfo( 'charset' ); ?>"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description" content="Build your own ecommerce shop">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="apple-touch-icon" href="src/img/apple.png">    <?php wp_head(); ?>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNL48MW');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MNL48MW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">

        <!-- Header w topbar nd modal canvas menu -->
        <header id="demotwo" class="site-header">
            <?php if (is_front_page() ): ?>
            <div class="headerbar header-demo2" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                        </nav>
                    </div>
                </div>
            </div>
            <?php elseif (is_single() || is_404() ): ?>
                <div class="headerbar header-demo2" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header single-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <div class="home-link">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                </div>
            </div>
            <?php else: ?>
                <div class="headerbar header-demo2" id="headerbar">
                <div class="container">
                    <div class="menu-here frontpage-header">
                        <nav class="navbar navbar-expand-lg navbar-light navbar-center" id="scroll-change">

                            <?php if(is_active_sidebar('widget-1') ) { ?>
                            <a aria-label="logo" class="logo_header" href="<?php echo esc_url(home_url('/')); ?>">
                                <ul>
                                <?php dynamic_sidebar('widget-1');?>
                                </ul>
                            </a>
                            <?php } ?>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <div class="menu-m">
                                    <span class="menu-global menu-top"></span>
                                    <!-- <span class="menu-global menu-middle"></span> -->
                                    <span class="menu-global menu-bottom"></span>
                                </div>
                            </button>

                            <?php wp_nav_menu(
                                array(
                                'theme_location'    => 'menu-1',
                                'menu_id'        => 'primary-menu',
                                'menu_class'        => 'navbar-nav',
                                'container_class'  => 'collapse navbar-collapse main-nav-toggle',
                                'container_id'    => 'navbarNav',
                                )
                                ); 
                            ?>

                        </nav>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </header><!-- #demotwo -->
        <div class="pageall">



        <script>
        // Demo2 - Header without topbar
        var currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
        window.onscroll = function() {
            scrollFunction();
        };
        function scrollFunction() {
            var header = document.getElementById("headerbar");
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                header.style.cssText = "padding: 10px 0px; transition: .5s; box-shadow: 0px 10px 16px #1a1a2e10;";
            } else {
                header.style.cssText = "transition: .5s; box-shadow: 0px";
            }
            currentScrollPos = window.pageYOffset || document.documentElement.scrollTop;
        }
        </script>
