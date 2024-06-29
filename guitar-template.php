<?php 
/*
Template Name: Guitar Template
*/
?>

<?php get_header(); ?>
        <!-- Dynamic content area -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="general-template">
                        <div class="blog-items">
                            <!-- The WordPress loop -->
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                    <article class="guitar-blog-item">
                                        <h1 class="page-header"><?php the_title(); ?></h1>
                                    </article>
                                    <?php
                                endwhile;
                            else: ?>
                                <p><?php esc_html_e( 'There is not anything here yet.', 'guitararchive' ) ?></p>
                            <?php endif; ?>
                            <!-- The blog content for guitars -->
                            <section class="guitar-page">
                                <div class="guitar-page-items">
                                    <!-- The WordPress loop -->
                                    <?php 

                                    // Get values from the theme customizer
                                    $per_page = get_theme_mod( 'set_per_guitar_page', 100 );
                                    $page_include = get_theme_mod( 'set_guitar_id_include' );

                                    $args = array(
                                        'post_type' => 'page',
                                        'posts_per_page' => 100,
                                        // Categories to go on homepage, and not
                                        'post__in' => explode( ",", $page_include ),
                                        'orderby' => 'post__in',
                                        'order' => 'ASC'
                                    );
        
                                    $postlist = new WP_Query( $args );
                                        if( $postlist->have_posts() ):
                                            while( $postlist->have_posts() ) : $postlist->the_post();
                                        get_template_part( 'parts/content', 'guitar-template' );
                                        endwhile;
                                        wp_reset_postdata();
                                    else: ?>
                                        <p><?php esc_html_e( 'There is not anything here yet.', 'guitararchive' ) ?></p>
                                    <?php endif; ?>
                                </div>
                            </section>
                        </div>
                    </div>

                </main>
            </div>
        </div>
<?php get_footer(); ?>

