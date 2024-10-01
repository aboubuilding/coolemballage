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
                    <li><a href="<?php bloginfo('url'); ?>/">Accueil </a></li>
                    <li><a href="<?php bloginfo('url'); ?>/">Nos services </a></li>
                    
                </ul><!-- /.thm-breadcrumb list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="service-details">
            <div class="container">
                <div class="row gutter-y-60">
                   
                    <div class="col-md-12 col-lg-12">
                        <div class="service-details__content">
                            <div class="service-details__thumbnail">


                            <?php
                        $idImageAlaUne = get_post_thumbnail_id();
                        $imgSrc = wp_get_attachment_url($idImageAlaUne);
                        ?>

                                <img src="<?php echo $imgSrc ?>" alt="Always Fresh">
                            </div><!-- /.service-details__thumbnail -->
                            <h3 class="service-details__title"><?php the_title(); ?></h3><!-- /.service-details__title -->
                            <p class="service-details__text">
                            <?php the_content(); ?>
                           
                            </p>
                            <!-- /.service-details__text -->
                            
                        </div><!-- /.service-details__content -->
                    </div><!-- /.col-md-12 col-lg-8 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.service-details -->
      


                <?php
    endwhile;?>

<?php
else :
endif;
?>


<?php get_footer(); ?>