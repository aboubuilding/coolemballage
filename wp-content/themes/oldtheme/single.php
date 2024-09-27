<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


        <!-- Start Breadcrumb
            ============================================= -->
        <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/4.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <h1>Services Details</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?php bloginfo('url'); ?>/"><i class="fas fa-home"></i> Accueil</a></li>
                           
                            <li class="active"><?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->

        <!-- Start 404
        ============================================= -->
        <div class="services-single-area default-padding">
            <div class="container">
                <div class="row">
                    <div class="services-content col-md-8">


                        <?php
                        $idImageAlaUne = get_post_thumbnail_id();
                        $imgSrc = wp_get_attachment_url($idImageAlaUne);
                        ?>


                        <img src="<?php echo $imgSrc ?>" alt="Thumb">
                        <div class="info">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>

                        </div>
                    </div>
                    <div class="sidebar col-md-4">

                        <!-- Single Item -->
                        <div class="sidebar-item address">
                            <div class="title">
                                <h4>Besoin d ' aide ?</h4>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div>
                                    <span>BOUAKE ,<br> QUARTIER AIR FRANCE 1,<br> RUE 21</span>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-phone"></i></div>
                                    <span>+225 07 48 43 43 88 <br></span>
                                </li>
                                <li>
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span>contact@jabalientreprise.com<br>
                                       </span>
                                </li>
                            </ul>
                        </div>
                        <!-- End Single Item -->
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- End 404 -->



                <?php
    endwhile;?>

<?php
else :
endif;
?>


<?php get_footer(); ?>