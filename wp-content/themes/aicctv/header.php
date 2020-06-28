<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes('en'); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify.common.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <meta name="themify-framework-css" data-href="<?php bloginfo('template_url');?>/assets/css/themify.framework.min.css" content="themify-framework-css"
        id="themify-framework-css" />
    <meta name="builder-styles-css" data-href="<?php bloginfo('template_url');?>/assets/css/themify-builder-style.min.css" content="builder-styles-css"
        id="builder-styles-css" />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/style.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/styles-b1d33c91c186089eb41ba6c8ca2f5017.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/style2.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/media-queries.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/header-top-widgets.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/theme-color-orange.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/menu-slidein-right.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-icons.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-557-generated-2579c8ccd9ac238401d7b56b14d310e7.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-281-generated-d5cb527b947b2dc24a7c00f6efc875bf.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-customizer-106be1fb26fc4861d709a4b756a1388f.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-396-generated-8de68982d26c9dc5ac0bde2c7efc3c24.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-377-generated-bc987ec9897650606baa6c90c860c0b2.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-127-generated-8bdba6306a10032e133b2be9d172fa23.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-builder-348-generated-7caed070a5a54a357c966d7896ae46f4.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/themify-customizer-2d52ea2638091936f91e111fa7b1c2b3.css'
        as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/jquery.fancybox.min.css'
        as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,300,600,700&#038;subset=latin'
        as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'
        as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel="preload" href="<?php bloginfo('template_url');?>/assets/css/themify-builder-style2.min.css" as="style" />
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/jquery.js'>
    </script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/jquery-migrate.min.js'></script>
    <link href="<?php bloginfo('template_url');?>/assets/images/GunLogoFinal-copy-2.png" rel="shortcut icon" />
    <script type="text/javascript">
        var tf_mobile_menu_trigger_point = 767;
	</script>
		<?php wp_head(); ?>
	</head>

<body <?php if( is_front_page() ) { ?> <?php body_class('home page-template-default page themify-fw-4-8-0 themify-ultra-2-6-8 skin-default not-ie full_width sidebar-none no-touch builder-parallax-scrolling-active ready-view header-top-widgets fixed-header menu-slidein-right footer-horizontal-left theme-color-orange  social-widget-off rss-off search-off tile_enable filter-hover-none filter-featured-only masonry-enabled'); ?> <?php } else {?> <?php body_class('page-template-default page themify-fw-4-8-0 themify-ultra-2-6-8 skin-default not-ie full_width sidebar-none no-touch builder-parallax-scrolling-active ready-view header-top-widgets fixed-header menu-slidein-right footer-horizontal-left theme-color-orange  social-widget-off rss-off search-off tile_enable filter-hover-none filter-featured-only masonry-enabled'); ?> <?php } ?>>
<script type="text/javascript">
        function themifyMobileMenuTrigger(e) {
            var w = document.body.clientWidth;
            if (w > 0 && w <= tf_mobile_menu_trigger_point) {
                document.body.classList.add('mobile_menu_active');
            } else {
                document.body.classList.remove('mobile_menu_active');
            }

        }
        themifyMobileMenuTrigger();
        var _init = function () {
            jQuery(window).on('tfsmartresize.tf_mobile_menu', themifyMobileMenuTrigger);
            document.removeEventListener('DOMContentLoaded', _init, {
                once: true,
                passive: true
            });
            _init = null;
        };
        document.addEventListener('DOMContentLoaded', _init, {
            once: true,
            passive: true
        });
    </script>
    <div id="pagewrap" class="hfeed site">
        <div id="headerwrap" class="fixed-header">
            <div class="header-icons"> <a id="menu-icon" href="#mobile-menu"><span class="menu-icon-inner"></span></a>
            </div>
            <header id="header" class="pagewidth clearfix">
                <div class="header-bar">
                    <div id="site-logo">
                        <a href="<?php bloginfo('url');?>" title="Gun Detection">
						<?php $logo = get_field('logo','options')?>
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="GunLogoFinal copy" />
                        </a>
                    </div>
                </div>
                <div id="mobile-menu" class="sidemenu sidemenu-off">
                    <div class="navbar-wrapper clearfix">
                        <nav id="main-nav-wrap">
							<?php wp_nav_menu( array( 'theme_location' => 'header_menu', 'container'=>'', 'menu_class'=>'main-nav', 'menu_id'=>'main-nav' ) ); ?>
                        </nav>
                    </div>
                    <div class="header-widget clearfix">
                        <div class="header-widget-inner">
                            <div class="col3-1 first">
                                <div id="text-1028" class="widget widget_text">
                                    <h4 class="widgettitle"><?php the_field('phone_number','options') ?></h4>
                                    <div class="textwidget"></div>
                                </div>
                            </div>
                            <div class="col3-1 "></div>
                        </div>
                    </div> <a id="menu-icon-close" href="#"></a>
                </div>
            </header>
        </div>
        <div id="body" class="clearfix">
