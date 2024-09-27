<?php get_header(); ?>


    <!-- Start Breadcrumb
       ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/23.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="<?php bloginfo('url'); ?>/"><i class="fas fa-home"></i> Accueil </a></li>

                        <li class="active">Contact  </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding">
        <div class="container">
            <div class="row">
                <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
                    <div class="col-md-4 address">
                        <div class="address-items">
                            <ul class="info">
                                <li>
                                    <h4>Adresse </h4>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                    <span>BOUAKE ,<br> QUARTIER AIR FRANCE ,<br> RUE 21</span>
                                </li>

                                <li>
                                    <h4>Télephone </h4>
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <span>+225 07 48 43 43 88 </span>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span>contact@jabalientreprise.com<br></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 contact-form">
                        <h2>Nous contacter </h2>

                        <form action="" method="POST" class="contact-form">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nom " type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Télephone " type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Votre message  *"></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit" name="submit" id="submit">
                                        Envoyez  <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->


<?php get_footer(); ?>