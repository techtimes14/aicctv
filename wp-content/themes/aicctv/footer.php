<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
	</div>
        <div id="footerwrap">
            <footer id="footer" class="pagewidth clearfix">
                <div class="back-top clearfix ">
                    <div class="arrow-up"><a href="#header"></a></div>
                </div>
                <div class="main-col first clearfix">
                    <div class="footer-left-wrap first">
                        <div class="footer-logo-wrapper clearfix">
                            <div id="footer-logo"><a href="<?php bloginfo('url');?>" title="Gun Detection"><span>AI CCTV</span></a></div>
                        </div>
                    </div>
                    <div class="footer-right-wrap">
                        <div class="footer-nav-wrap"></div>
                    </div>
                </div>
                <div class="section-col clearfix">
                    <div class="footer-widgets-wrap">
                        <div class="footer-widgets clearfix">
                            <div class="col3-1 first">
                                <div id="text-1026" class="widget widget_text">
                                    <h4 class="widgettitle">Contact</h4>
                                    <div class="textwidget">
                                        <p><a href="<?php echo get_permalink('25'); ?>">Australia</a></p>
                                        <p><a href="https://gundetection.co.nz/contact-nz/" target="_blank">New Zealand</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-1">
                                <div id="nav_menu-2" class="widget widget_nav_menu">
                                    <h4 class="widgettitle">Sitemap</h4>
                                    <div class="menu-footer-container">
										<?php wp_nav_menu( array( 'theme_location' => 'footer_menu', 'container'=>'', 'menu_class'=>'menu', 'menu_id'=>'menu-footer' ) ); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col3-1 ">
                                <div id="text-1025" class="widget widget_text">
                                    <h4 class="widgettitle">About</h4>
                                    <div class="textwidget">
                                        <div class="page" title="Page 1">
                                            <div class="section">
                                                <div class="layoutArea">
                                                    <div class="column">
													<?php the_field('footer_content','options') ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-text clearfix">
                    <div class="footer-text-inner">
                        <div><a href="<?php echo get_permalink('259'); ?>">Privecy Policy</a></div>
                        <div class="one">&copy; GDA Software Pty Ltd</div>
                        <div class="two">Site By > <a href="http://www.techtimes-in.com/" target="_blank">TechTimes</a></div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/mediaelementplayer-legacy.min.css' as="style"
        onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <link rel='preload' href='<?php bloginfo('template_url');?>/assets/css/wp-mediaelement.min.css' as="style" onload="this.onload=null;this.rel='stylesheet'" type='text/css' media='all' />
    <script type='text/javascript'>
        var themify_vars = {
            "minify": {
                "css": {
                    "themify-icons": 1,
                    "lightbox": 1,
                    "main": 1,
                    "themify-builder-style": 1
                },
                "js": {
                    "backstretch.themify-version": 1,
                    "bigvideo": 1,
                    "themify.dropdown": 1,
                    "themify.mega-menu": 1,
                    "themify.builder.script": 1,
                    "themify.scroll-highlight": 1,
                    "themify-youtube-bg": 1,
                    "themify-ticks": 1
                }
            },
            "scrollTo": null
        };
        var tbLocalScript = {
            "breakpoints": {
                "tablet_landscape": [769, "1024"],
                "tablet": [681, "768"],
                "mobile": "480"
            },
        };
        var themifyScript = {
            "lightbox": {
                "lightboxSelector": ".themify_lightbox",
                "lightboxOn": true,
            },
            "lightboxContext": "body"
        };
    </script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/main.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/scripts-bfc87e7d99271888a096528fd564075f.js'>
    </script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/scripts-665b3b82c9e4d2a780f84ae011e42be7.js'>
    </script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/themify.sidemenu.min.js'>
    </script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/themify.script.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/mediaelement-and-player.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/mediaelement-migrate.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/wp-mediaelement.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/vimeo.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('template_url');?>/assets/js/jquery.fancybox.min.js'>
    </script>
    <script type="text/javascript">
        if (document.getElementById("themify-builder-style") === null) {
            var el = document.getElementById("builder-styles-css");
            if (el !== null) {
                var link = document.createElement("link");
                link.id = "themify-builder-style";
                link.rel = "stylesheet";
                link.type = "text/css";
                link.href = el.getAttribute("data-href");
                el.parentNode.replaceChild(link, el);
            }
        }
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery(".fancybox").fancybox();
        });
        jQuery( ".realtime_accordion-title a" ).click(function() {
            jQuery('.realtime_accordion-content').animate({
                height: 'toggle'
            }, 500);
        });
    </script>
	<?php wp_footer(); ?>
	</body>
</html>
