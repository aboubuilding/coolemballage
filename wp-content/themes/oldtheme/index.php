<?php get_header(); ?>


<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

    <!-- Start About
    ============================================= -->
    <div class="about-area full-width text-center default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 about-info">
                    <div class="site-heading text-center">
                        <h2>Présentation</h2>

<p> Chez JABALI Entreprise, nous sommes fiers d’être votre partenaire de confiance pour tous vos besoins commerciaux. Depuis notre création, nous nous engageons à fournir à nos clients des  produits de qualité répondants à leurs besoins.</p>




                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="services-area default-padding text-light  bottom-less shadow dark bg-fixed" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/img/banner/jabali4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Nos  services</h2>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-items text-center">

<?php

$args = array(


    'post_type'      => 'services',
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
                    <!-- Single Item -->
                    <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="icon">
                                <i class="flaticon-report"></i>
                            </div>
                            <div class="info">
                                <h4><?php the_title(); ?></h4>
                                <p>
                                    <?php the_excerpt(); ?>

                                </p>
                                <a href="<?php the_permalink(); ?>">Lire la suite  <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->


    <?php
    endwhile;?>

<?php
else :
endif;
?>




                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


    <div class="callback-area default-padding">

        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="side-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="heading">
                        <h2>Nous contacter  </h2>

                    </div>
                    <form action="https://validthemes.net/site-template/buspro/assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Nom" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Télephone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Votre message  *"></textarea>


                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">

                                    Valider
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
                <!-- End Form -->
                <!-- Start Thumb -->
                <div class="col-md-6 thumb">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner/jabali3.jpg" alt="Thumb">
                </div>

            </div>
        </div>
    </div>


<?php get_footer(); ?>