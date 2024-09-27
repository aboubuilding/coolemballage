<?php get_header(); ?>


    <!-- Start Breadcrumb
        ============================================= -->
    <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/4.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h1><?php the_title(); ?></h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Accueil </a></li>

                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Services
    ============================================= -->
    <div class="services-inc-area carousel-shadow default-padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-items services-carousel owl-carousel owl-theme">

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
                        <div class="item">
                            <div class="thumb">
                                <?php
                                $idImageAlaUne = get_post_thumbnail_id();
                                $imgSrc = wp_get_attachment_url($idImageAlaUne);
                                ?>
                                <img src="<?php echo $imgSrc ?>" alt="Thumb">
                                <div class="overlay">
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="flaticon-report"></i>
                                        <h4><?php the_title(); ?></h4>
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                <p>
                                    <?php the_excerpt(); ?>

                                </p>
                                <a href="<?php the_permalink(); ?>">Lire la suite  <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>


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
    </div>
    <!-- End Services -->



<?php get_footer(); ?>