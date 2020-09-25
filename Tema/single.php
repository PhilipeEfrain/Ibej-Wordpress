<?php get_header(); ?>

        <!-- ====== Header ====== -->
        <header id="header" class="header">
            <!-- ====== Navbar ====== -->
            <!-- ====== // Navbar ====== -->
            <!-- Page Title -->
            <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'large' ) : null; ?>
            <div class="bg-img bg-overlay page-title section-padding" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/breadcrumb.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>">
                <div class="container">
                    <div class="justify-content-center row">
                        <div class="col-lg-6 text-center">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Page Title -->
        </header>
        <!-- ====== // Header ====== -->
        <section class="blog-section">
            <div class="container">
                <div class="row" style="justify-content: center;">
                    <!-- Blog Main Content -->
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div class="col-lg-9">
                                <div class="blog-post">
                                    <p class="blog-meta"><a class="user-name" href="<?php echo get_author_posts_url( false, get_the_author_meta( 'user_nicename', false ) ) ?>"><?php echo get_the_author_meta( 'display_name', false ) ?></a><span class="blog-date"><?php the_time( get_option( 'date_format' ) ); ?></span></p>
                                    <div class="blog-main-content">
                                        <?php the_content(); ?>
                                        <div class="blog-content-footer">
                                            <div class="row">
                                                <div class="col-md-6">
</div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  Blog Author -->
                                    <!-- // Blog Author -->
                                    <!-- Blog Comments -->
                                    <!-- // Blog Comments -->
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'site_ibej' ); ?></p>
                    <?php endif; ?>
                    <!-- // Blog Main Content -->
                    <!-- Sidebar -->
                    <!-- // Sidebar -->
                </div>
            </div>
        </section>        

<?php get_footer(); ?>