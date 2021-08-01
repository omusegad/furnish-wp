<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package furnish
 */

?>
    <!--====== FOOTER PART START ======-->
    
    <section id="footer" class="footer-area">
        <div class="container">
            <div class="footer-widget pt-75 pb-120">
                <div class="row">
                    <div class="col-lg-3 col-md-5 col-sm-7">
                        <?php if ( is_active_sidebar( 'brandifo-1' ) ) : ?>
                           <?php dynamic_sidebar( 'brandifo-1' ); ?>
                        <?php endif; ?>
                                                </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Services</h5>
                        
                                <?php 
                                wp_nav_menu( array(
                                    'menu'           => 'Service Menu', // Do not fall back to first non-empty menu.
                                    'theme_location' => 'services-footer-menu',
                                    'fallback_cb'    => false // Do not fall back to wp_page_menu()
                                ) );
                                ?>
                                
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="footer-link mt-50">
                            <h5 class="f-title">Help</h5>
                            <?php 
                                wp_nav_menu( array(
                                    'menu'           => 'Help Menu', // Do not fall back to first non-empty menu.
                                    'theme_location' => 'help-footer-menu',
                                    'fallback_cb'    => false // Do not fall back to wp_page_menu()
                                ) );
                                ?>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-7">
                        <div class="footer-info mt-50">
                        <?php if ( is_active_sidebar( 'contacts-1' ) ) : ?>
                           <?php dynamic_sidebar( 'contacts-1' ); ?>
                        <?php endif; ?>
                          
                        </div> <!-- footer link -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer widget -->
            <div class="footer-copyright pt-15 pb-15">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright text-center">
                            <p>Crafted by 
                                <a href="https://www.linkedin.com/in/omuse-gad-85507182/" rel="nofollow">Omuse, Please review my linked Profile</a></p>
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!--  footer copyright -->
        </div> <!-- container -->
    </section>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    
    
    <!--====== jquery js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    
    
    <!--====== Slick js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.magnific-popup.min.js"></script>

    
    <!--====== nav js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nav.js"></script>
    
    <!--====== Nice Number js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.nice-number.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script>
        jQuery(document).ready(function() {
            // $(".tab-pan").click(function(){
            //     // $(".tab-pan active show")
            //     $(this).tab('show');
            // });
        });
    </script>

<?php wp_footer(); ?>

</body>
</html>
