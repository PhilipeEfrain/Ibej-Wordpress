<?php get_header(); ?>

<header id="imagemdefundo" class="header">
    <!-- ====== Navbar ====== -->
    <!-- ====== // Navbar ====== -->
    <!-- Page Title -->
    <div class="page-title bg-img section-padding bg-overlay" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/breadcrumb.jpg')">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2><?php bloginfo( 'description' ); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <!-- // Page Title -->
</header>
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-area">
                    <div class="row">
                        <!-- Single Blog -->
                        <?php
                            $post_query_args = array(
                                'post_type' => 'post',
                                'nopaging' => true,
                                'order' => 'DESC',
                                'orderby' => 'date'
                            )
                        ?>
                        <?php $post_query = new WP_Query( $post_query_args ); ?>
                        <?php if ( $post_query->have_posts() ) : ?>
                            <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                                <?php PG_Helper::rememberShownPost(); ?>
                                <div <?php post_class( 'col-sm-6' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="single-blog">
                                        <?php if ( is_singular() ) : ?>
                                            <?php echo PG_Image::getPostImage( null, 'post-thumbnail', array(
                                                    'class' => 'blog-thumb'
                                            ), null, null ) ?>
                                        <?php else : ?>
                                            <?php echo PG_Image::getPostImage( null, 'post-thumbnail', array(
                                                    'class' => 'blog-thumb'
                                            ), null, null ) ?>
                                        <?php endif; ?>
                                        <h4 class="blog-title"><a href="single-blog.html"><?php the_title(); ?></a></h4>
                                        <p class="blog-meta"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                        <?php the_excerpt( ); ?>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="button"><?php _e( 'Leia mais', 'site_ibej' ); ?></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'site_ibej' ); ?></p>
                        <?php endif; ?>
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                        <!-- Single Blog -->
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                            <a href="#" class="button blog-btn"><?php _e( 'Load More', 'site_ibej' ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <!-- // Sidebar -->
        </div>
    </div>
</section>            

<?php get_footer(); ?>