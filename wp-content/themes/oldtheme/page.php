<?php get_header(); ?>
   
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>


                <!-- Start Breadcrumb
                   ============================================= -->
                <div class="breadcrumb-area shadow dark bg-fixed text-center text-light" style="background-image: url(assets/img/banner/1.jpg);">
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                                <h1><?php the_title(); ?></h1>
                                                <ul class="breadcrumb">
                                                        <li><a href="<?php bloginfo('url'); ?>/"><i class="fas fa-home"></i> Accueil </a></li>

                                                        <li class="active"><?php the_title(); ?></li>
                                                </ul>
                                        </div>
                                </div>
                        </div>
                </div>
                <!-- End Breadcrumb -->

                <!-- Start Our About
                ============================================= -->
                <div class="about-area inc-video default-padding">
                        <div class="container">
                                <div class="row">
                                        <!-- Start About -->
                                        <div class="about-content">
                                                <div class="col-md-6 video-info">
                                                        <div class="thumb">
                                                                <img src="<?php bloginfo('template_directory'); ?>/assets/img/banner/jabali1.jpg" alt="Thumb">

                                                        </div>
                                                </div>
                                                <div class="col-md-6 info">
                                                        <h4><?php the_title(); ?></h4>
                                                    <br>
                                                    <br>


                                                    <?php the_content(); ?>

                                                </div>
                                        </div>
                                        <!-- End About -->
                                </div>
                        </div>
                </div>
                <!-- End Our About -->





        <?php endwhile; ?>
<?php endif; ?>


        
<?php get_footer(); ?>