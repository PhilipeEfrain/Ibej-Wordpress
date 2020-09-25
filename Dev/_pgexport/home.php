<?php get_header(); ?>

        <!-- Preloader -->
        <div class="preloader">
            <div class="spinner">
                <div class="cube1"></div>
                <div class="cube2"></div>
            </div>
        </div>
        <!-- // Preloader -->
        <!-- ====== Header ====== -->
        <!-- ====== // Header ====== -->
        <!-- ====== Hero Area ====== -->
        <div class="hero-aria" id="home">
            <!-- Hero Area Content -->
            <div class="container">
                <div class="hero-content h-100">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <h2 class="text-uppercase"><?php echo get_theme_mod( 'carousel_texto', __( 'Let\'s Begin', 'site_ibej' ) ); ?></h2>
                            <h3 class="text-uppercase"><span class="typed"></span></h3>
                            <p><?php echo get_theme_mod( 'carousel_texto_02', __( 'Make designed by as Begindot.', 'site_ibej' ) ); ?></p>
                            <a href="<?php echo get_theme_mod( 'carousel_btn_link', '#about' ); ?>" class="button smooth-scroll" style="background-color: #ffffff;"><?php echo get_theme_mod( 'carousel_btn_nome', __( 'Learn More', 'site_ibej' ) ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // Hero Area Content -->
            <!-- Hero Area Slider -->
            <div class="hero-area-slids owl-carousel">
                <div class="single-slider">
                    <!-- Single Background -->
                    <div class="slider-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-area/img-1.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'carousel_img01' ), 'large' ).')' ?>;"></div>
                    <!-- // Single Background -->
                </div>
                <div class="single-slider">
                    <!-- Single Background -->
                    <div class="slider-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-area/img-2.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'carousel_img02' ), 'large' ).')' ?>;"></div>
                    <!-- // Single Background -->
                </div>
            </div>
            <!-- // Hero Area Slider -->
        </div>
        <!-- ====== //Hero Area ====== -->
        <!-- ====== Featured Area ====== -->
        <section id="featured" class="section-padding pb-70">
            <div class="container">
                <div class="row">
                    <!-- single featured item -->
                    <?php
                        $area_atuacao_query_args = array(
                            'post_type' => 'area_atuacao',
                            'nopaging' => true,
                            'order' => 'DESC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $area_atuacao_query = new WP_Query( $area_atuacao_query_args ); ?>
                    <?php if ( $area_atuacao_query->have_posts() ) : ?>
                        <?php while ( $area_atuacao_query->have_posts() ) : $area_atuacao_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-lg-4 col-md-6' ); ?> id="post-<?php the_ID(); ?>">
                                <div class="single-featured-item-wrap">
                                    <div class="text-center">
                                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                                'style' => 'max-height: 60px; max-width: 60px; margin-bottom: 10px; margin-top: 10px;'
                                        ), 'height', null ) ?>
                                    </div>
                                    <h3><a href="#"><?php the_title(); ?></a></h3>
                                    <div class="single-featured-item">
                                        <div class="featured-icon">
</div>
                                        <?php the_excerpt( ); ?>
                                        <a href="single-blog.html" class="button"><?php _e( 'Leia mais', 'site_ibej' ); ?></a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'site_ibej' ); ?></p>
                    <?php endif; ?>
                    <!-- single featured item -->
                    <!-- single featured item -->
                    <!-- single featured item -->
                    <!-- single featured item -->
                    <!-- single featured item -->
                </div>
            </div>
        </section>
        <!-- ====== //Featured Area ====== -->
        <!-- ====== About Area ====== -->
        <section id="about" class="section-padding about-area bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2><?php echo get_theme_mod( 'sobre_titulo', __( 'About Me', 'site_ibej' ) ); ?></h2>
                            <p><?php echo get_theme_mod( 'sobre_sub_tag', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat unde non modi, facilis, quae?', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-bg" style="background-image:url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about-bg.jpg');background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'sobre_imagem' ), 'large' ).')' ?>;">
                            <!-- Social Link -->
                            <div class="social-aria">
                                <a target="_blank" href="<?php echo get_theme_mod( 'sobre_link_facebook', '#' ); ?>"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="<?php echo get_theme_mod( 'sobre_link_instagram', '#' ); ?>"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="<?php echo get_theme_mod( 'sobre_link_youtube', '#' ); ?>"><i class="fab fa-youtube"></i></a>
                            </div>
                            <!-- // Social Link -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2><?php echo get_theme_mod( 'sobre_segundo_titulo', 'Hello, I am <span>AL Mamun</span>' ); ?></h2>
                            <h4><?php echo get_theme_mod( 'sobre_seg_tag', __( 'Graphic Designer and Web Designer', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'sobre_testo_pincipal', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam! Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident omnis.', 'site_ibej' ) ); ?></p>
                            <!-- Skill Area -->
                            <!-- //Skill Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="section-padding about-area bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2><?php echo get_theme_mod( 'c5_sobre_titulo', __( 'About Me', 'site_ibej' ) ); ?></h2>
                            <p><?php echo get_theme_mod( 'c5_sub_tag', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat unde non modi, facilis, quae?', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-bg" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo%20c5.png'); background-size: contain; background-repeat: no-repeat;background-image:<?php echo 'url('.PG_Image::getUrl( get_theme_mod( 'c5_imagem' ), 'large' ).')' ?>;">
                            <!-- Social Link -->
                            <!-- // Social Link -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <h2><?php echo get_theme_mod( 'c5_segundo_titulo', 'Hello, I am <span>AL Mamun</span>' ); ?></h2>
                            <h4><?php echo get_theme_mod( 'c5_seg_tag', __( 'Graphic Designer and Web Designer', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'c5_testo_pincipal', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam! Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident omnis.', 'site_ibej' ) ); ?></p>
                            <!-- Skill Area -->
                            <!-- //Skill Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== // About Area ====== -->
        <!-- ====== Fact Counter Section ====== -->
        <!-- ====================================================================
            NOTE: You need to change  'data-count="10"' and 'p' Eliments 
        ===================================================================== -->
        <!-- ====== //Fact Counter Section ====== -->
        <!-- ====== Service Section ====== -->
        <!-- ====== //Service Section ====== -->
        <!-- ====== Why choose Me Section ====== -->
        <section id="" class="section-padding why-choose-us pb-70">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2><?php echo get_theme_mod( 'vantagens_titulo', __( 'Why choose Me', 'site_ibej' ) ); ?></h2>
                            <p><?php echo get_theme_mod( 'vantagens_subtitulo', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row">
                    <!-- Single Why choose me -->
                    <div class="col-md-6">
                        <div class="single-why-me why-me-left">
                            <div class="why-me-icon">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <i class="fa fa-clock"><?php echo get_theme_mod( 'vantagens_icone01' ); ?></i>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo get_theme_mod( 'vantagem_01', __( 'Completed on right time', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'vantagem_texto01', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                    <!-- // Single Why choose me -->
                    <!-- Single Why choose me -->
                    <div class="col-md-6">
                        <div class="single-why-me why-me-right">
                            <div class="why-me-icon">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <i class="fa fa-calendar-check"><?php echo get_theme_mod( 'vantagens_icone03' ); ?></i>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo get_theme_mod( 'vantagem_03', __( 'Completed on right time', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'vantagem_texto03', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                    <!-- // Single Why choose me -->
                    <!-- Single Why choose me -->
                    <div class="col-md-6">
                        <div class="single-why-me why-me-left">
                            <div class="why-me-icon">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <i class="fa fa-history"><?php echo get_theme_mod( 'vantagens_icone02' ); ?></i>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo get_theme_mod( 'vantagem_02', __( 'Completed on right time', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'vantagem_texto02', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                    <!-- // Single Why choose me -->
                    <!-- Single Why choose me -->
                    <div class="col-md-6">
                        <div class="single-why-me why-me-right">
                            <div class="why-me-icon">
                                <div class="d-table">
                                    <div class="d-table-cell">
                                        <i class="fa fa-phone-volume"><?php echo get_theme_mod( 'vantagens_icone04' ); ?></i>
                                    </div>
                                </div>
                            </div>
                            <h4><?php echo get_theme_mod( 'vantagem_04', __( 'Completed on right time', 'site_ibej' ) ); ?></h4>
                            <p><?php echo get_theme_mod( 'vantagem_texto04', __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate, quod dolore facilis iusto eligendi.', 'site_ibej' ) ); ?></p>
                        </div>
                    </div>
                    <!-- // Single Why choose me -->
                </div>
            </div>
        </section>
        <!-- ====== //Why choose Me Section ====== -->
        <!-- ====== Portfolio Section ====== -->
        <!-- ====== // Portfolio Section ====== -->
        <!-- ====== Frequently asked questions ====== -->
        <!-- ====== // Frequently asked questions ====== -->
        <!-- ====== Blog Section ====== -->
        <section class="section-padding pb-70 blog-section bg-light">
            <div class="container">
                <!-- Section Title -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 ">
                        <div class="section-title text-center">
                            <h2><?php _e( 'Blog Area', 'site_ibej' ); ?></h2>
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'site_ibej' ); ?></p>
                        </div>
                    </div>
                </div>
                <!-- //Section Title -->
                <div class="row">
                    <!-- Single Blog -->
                    <?php
                        $post_query_args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 3,
                            'paged' => get_query_var( 'paged' ) ?: 1,
                            'order' => 'DESC',
                            'orderby' => 'date'
                        )
                    ?>
                    <?php $post_query = new WP_Query( $post_query_args ); ?>
                    <?php if ( $post_query->have_posts() ) : ?>
                        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-lg-4 col-md-6' ); ?> id="post-<?php the_ID(); ?>">
                                <div class="single-blog">
                                    <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'post-thumbnail' ) : null; ?>
                                    <div class="blog-thumb" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/blog/img-1.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
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
                </div>
            </div>
        </section>        

<?php get_footer(); ?>