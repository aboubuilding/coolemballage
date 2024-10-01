<?php get_header(); ?>

<section class="page-header">
            <div class="page-header__shape-left"></div>
            <div class="page-header__shape-right"></div>
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-down">Services</h2>
                <ul class="alefox-breadcrumb list-unstyled">
                    <li><a href="index.html">Accueil </a></li>
                    <li><span><?php the_title(); ?></span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <!-- Service Start -->
        <section class="service-two">
            <div class="container">
                <div class="row gutter-y-30">


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


                    <div class="col-lg-4 col-md-6">
                        <div class="service-two__item wow fadeInUp" data-wow-delay="00ms">

                        <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>


                            <div class="service-two__item__image">
                                <img src="<?php echo $imgSrc ?>" alt="alefox" style="height: 240px;">
                            </div>
                            <div class="service-two__item__content">
                                <div class="service-two__item__icon">
                                    <span class="icon-salad"></span>
                                </div><!-- /.service-icon -->
                                <h3 class="service-two__item__title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3><!-- /.service-title -->
                                <p class="service-two__item__text">
                                <?php the_excerpt(); ?>
                                
                                </p><!-- /.service-text -->
                                <a href="<?php the_permalink(); ?>" class="service-two__item__link">
                                    <i class="icofont-arrow-up"></i>
                                </a>
                            </div>
                        </div><!-- /.service-item -->
                    </div>


                    <?php
    endwhile;?>

<?php
else :
endif;
?>

                   
                </div>
            </div>
        </section>
        <!-- Service End -->



<?php get_footer(); ?>