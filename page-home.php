<?php get_header(); ?>
        <!-- Dynamic content area -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <!-- Hero element -->
                    <section class="hero">
                        Hero
                    </section>
                    <!-- Mission section -->
                    <section class="mission">
                        <?php 
                            if( is_active_sidebar( 'sidebar-mission' )){
                                dynamic_sidebar( 'sidebar-mission' );
                            }
                        ?>
                    </section>
                    <!-- Home blog -->
                    <section class="home-blog">
                            <h2 id="home-blog-header">Latest Articles</h2>
                            <div class="home-blog-items">
                                <!-- The WordPress loop -->
                                <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    // Categories to go on homepage, and not
                                    'category_in' => array(),
                                    'category_not_in' => array(),
                                );
    
                                $postlist = new WP_Query( $args );
                                    if( $postlist->have_posts() ):
                                        while( $postlist->have_posts() ) : $postlist->the_post();
                                    get_template_part( 'parts/content', 'latest-news' );
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p>Nothing yet to be displayed</p>
                                <?php endif; ?>
                            </div>

                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>