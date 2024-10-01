<?php get_header(); ?>
   
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<section class="page-header">
            <div class="page-header__shape-left"></div>
            <div class="page-header__shape-right"></div>
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <h2 class="page-header__title bw-split-in-down"><?php the_title(); ?></h2>
                <ul class="alefox-breadcrumb list-unstyled">
                    <li><a href="<?php bloginfo('url'); ?>/">Accueil</a></li>
                    <li><span><?php the_title(); ?></span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="about-one">
            <div class="about-one__shape" style="background-image: url(assets/images/resources/about-1-shape-1.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one__image wow fadeInLeft" data-wow-delay="200ms">
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/accueil/image3.jpg" alt="alefox">
                           
                            <div class="about-one__image__three">
                                <img src="<?php bloginfo('template_directory'); ?>/assets/images/shapes/about-1-brand.png" alt="alefox">
                            </div>
                        </div><!-- /.about-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="300ms">
                        <div class="about-one__content">
                            <div class="sec-title text-left">

                                <h6 class="sec-title__tagline bw-split-in-right"><span class="sec-title__tagline__left-leaf" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/images/shapes/leaf.png);"></span><span class="sec-title__tagline__right-leaf" style="background-image: url(assets/images/shapes/leaf.png);"></span></h6><!-- /.sec-title__tagline -->

                                <h3 class="sec-title__title bw-split-in-left"><?php the_title(); ?></h3><!-- /.sec-title__title -->
                            </div><!-- /.sec-title -->
                            <p class="about-one__content__text">
                            <?php the_content(); ?>
                            </p>
                           
                        </div><!-- /.why-choose-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->





        <?php endwhile; ?>
<?php endif; ?>


        
<?php get_footer(); ?>