<?php get_header(); ?>


<section class="page-header">
            <div class="page-header__shape-left"></div>
            <div class="page-header__shape-right"></div>
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-down">Contact </h2>
                <ul class="alefox-breadcrumb list-unstyled">
                    <li><a href="<?php bloginfo('url'); ?>/">Accueil </a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->


   
   
<br>
<br>
<br>

        <section class="contact-two">
            <div class="contact-two__bg" style="background-image: url(<?php bloginfo('template_directory'); ?>/aassets/images/backgrounds/contact-bg-2.jpg);"></div>
            <div class="contact-two__shape" style="background-image: url(<?php bloginfo('template_directory'); ?>/aassets/images/shapes/contact-2-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-5">
                        <form class="contact-two__form contact-form-validated form-one wow fadeInUp" data-wow-duration="1500ms" action="https://bracketweb.com/alefox-html/inc/sendemail.php">
                            <div class="sec-title text-center">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-leaf" style="background-image: url(assets/images/shapes/leaf.png);"></span>Contact Us<span class="sec-title__tagline__right-leaf" style="background-image: url(assets/images/shapes/leaf.png);"></span></h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left">Nous contacter </h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <div class="form-one__group">
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="name" placeholder="Name">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="email" name="email" placeholder="Email">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="address" placeholder="Address">
                                </div><!-- /.form-one__control form-one__control--full -->
                                <div class="form-one__control form-one__control--full">
                                    <input type="text" name="phone" placeholder="Phone">
                                </div><!-- /.form-one__control form-one__control--full -->
                                
                                <div class="form-one__control form-one__control--full">
                                    <button type="submit" class="alefox-btn">
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                        <span class="alefox-btn__item"></span>
                                       Envoyez 
                                    </button>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                    </div>
                    <div class="col-md-6 col-xl-7 d-flex align-items-center wow fadeInUp">
                        <ul class="contact-two__list">
                            <li class="contact-two__item">
                                <div class="contact-two__item__icon"><span class="icon-phone-call"></span></div>
                                <div class="contact-two__item__content">
                                    <h3 class="contact-two__item__title">Télephone </h3>
                                    <p class="contact-two__item__text"><a href="tel:+225 07 77 22 77 48">+225 07 77 22 77 48</a></p>
                                </div>
                            </li><!-- item -->
                            <li class="contact-two__item">
                                <div class="contact-two__item__icon"><span class="icon-email"></span></div>
                                <div class="contact-two__item__content">
                                    <h3 class="contact-two__item__title">Email </h3>
                                    <p class="contact-two__item__text"><a href="mailto:contact@coolemballage.com">contact@coolemballage.com</a></p>
                                </div>
                            </li><!-- item -->
                            <li class="contact-two__item">
                                <div class="contact-two__item__icon"><span class="icon-location"></span></div>
                                <div class="contact-two__item__content">
                                    <h3 class="contact-two__item__title">Adresse </h3>
                                    <p class="contact-two__item__text"> ABIDJAN TREICHVILLE, RUE 25, AVENUE 23, LOT 534.
                                    05BP457 Abidjan 05</p>
                                </div>
                            </li><!-- item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <br>
<br>
<br>



<?php get_footer(); ?>