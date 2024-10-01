<?php



?>


<footer class="main-footer background-black">
            <div class="main-footer__bg background-black" style="background-image: url(assets/images/backgrounds/footer-bg-1-1.jpg);"></div>
            <!-- /.main-footer__bg -->
            <div class="main-footer__top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--about">
                            <h2 class="footer-widget__title">Nous contacter</h2>
                                <ul class="list-unstyled footer-widget__info">
                                    
                                    <li>
                                        <span class="footer-widget__info__icon"><i class="icofont-location-pin"></i></span>
                                        ABIDJAN TREICHVILLE, RUE 25, AVENUE 23, LOT 534.
                            05BP457 Abidjan 05
                                    </li>
                                    <li>
                                        <span class="footer-widget__info__icon"><i class="icofont-phone"></i></span>
                                        <a href="tel:+225 07 77 22 77 48">+225 07 77 22 77 48</a>
                                    </li>
                                </ul><!-- /.list-unstyled -->
                                <div class="footer-widget__social">

                                    <a href="https://facebook.com/">
                                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Facebook</span>
                                    </a>
                                   
                                   
                                    <a href="https://instagram.com/">
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <span class="sr-only">Instagram</span>
                                    </a>
                                </div><!-- /.footer-widget__social -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--links">
                                <h2 class="footer-widget__title">Nos services </h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">

                                <?php

$args = array(


    'post_type'      => 'domaine',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC'

);

$posts = new WP_Query( $args );
if( $posts->have_posts() ) :
    ?>

    <?php
    while( $posts->have_posts() ) :
        $posts->the_post();
        ?>


                                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    
                                    <?php
    endwhile;?>

<?php
else :
endif;
?>

                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div>
                        </div><!-- /.col-md-6 -->
                        <div class="col-md-6 col-xl-4">
                            <div class="footer-widget footer-widget--links footer-widget--links-two">
                                <h2 class="footer-widget__title">Informations </h2><!-- /.footer-widget__title -->
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="<?php bloginfo('url'); ?>/presentation">Présentation </a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/nos-services">Nos services </a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/contact">Contact </a></li>
                                   
                                </ul><!-- /.list-unstyled footer-widget__links -->
                            </div><!-- /.footer-widget -->
                        </div><!-- /.col-md-6 -->

                   
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__top -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <span class="dynamic-year"></span> par  COOLEMBALLAGE.
                        </p>
                    </div><!-- /.main-footer__inner -->
                </div><!-- /.container -->
            </div><!-- /.main-footer__bottom -->
        </footer><!-- /.main-footer -->

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="<?php bloginfo('url'); ?>/" aria-label="logo image"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logoemballage.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@alefox.com">contact@coolemballage.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+225 07 77 22 77 48">+225 07 77 22 77 48</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">

                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
               
               
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Recherche ..." />
                <button type="submit" aria-label="search submit" class="alefox-btn">
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->
    <!-- Sidebar One Start -->
    <aside class="sidebar-one">
        <div class="sidebar-one__overlay"></div><!-- /.siderbar-ovarlay -->
        <div class="sidebar-one__content">
            <div class="sidebar-one__close"><i class="icofont-close-line"></i></div><!-- /.siderbar-close -->
            <div class="sidebar-one__logo">
                <a href="index.html" aria-label="logo image"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logoemballage.png" alt="Careox HTML" width="147"></a>
            </div><!-- /.sidebar-one__logo-box -->
            
            <h4 class="sidebar-one__title">Contact Info:</h4>
            <ul class="sidebar-one__info">
                <li>
                    <span class="fas fa-map-marker-alt"></span>
                    ABIDJAN TREICHVILLE, RUE 25, AVENUE 23, LOT 534.
                    05BP457 Abidjan 05
                </li>
                <li>
                    <span class="fas fa-envelope"></span>
                    <a href="mailto:contact@coolemballage.com">contact@coolemballage.com</a>
                </li>
                <li>
                    <span class="fas fa-phone-alt"></span>
                    <a href="tel:+225 07 77 22 77 48">+225 07 77 22 77 48</a>
                </li>
            </ul>
            <div class="sidebar-one__social">

                <a href="https://facebook.com/">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
              
               
                <a href="https://instagram.com/">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /sidebar-one__socila -->
           
        </div><!-- /.sidebar__content -->
    </aside>
    <!-- Sidebar One Start -->

    <!-- back-to-top-start -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>
    <!-- back-to-top-end -->


    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/wow/wow.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/isotope/isotope.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/slick/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/countdown/countdown.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/progress-bar/knob.js"></script>
    <!-- gsap js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/gsap/gsap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/gsap/scrolltrigger.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/gsap/splittext.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/vendors/gsap/alefox-split.js"></script>
    <!-- template js -->
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/alefox.js"></script>

    <?php wp_footer(); ?>

   </body>


<!-- Mirrored from bracketweb.com/alefox-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Sep 2024 21:25:27 GMT -->
</html>

