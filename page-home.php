<?php get_header(); ?>
<!-- Hero element -->
<?php 
$hero_title = get_theme_mod( 'set_hero_title', __( 'Please add a title', 'guitararchive' ) ); 
$hero_subtitle = get_theme_mod( 'set_hero_subtitle', __( 'Please add a subtitle', 'guitararchive' ) ); 
$hero_button_link = get_theme_mod( 'set_hero_button_link', '#'); 
$hero_button_text = get_theme_mod( 'set_hero_button_text', __( 'View The Guitars', 'guitararchive' ) ); 
$hero_height = get_theme_mod( 'set_hero_height', 800 ); 
$hero_background = wp_get_attachment_url( get_theme_mod( 'set_hero_background' ) ); 
?>
<section class="hero" style="background-image: url(<?php echo esc_url( $hero_background ) ?>)">
    <div class="overlay" style="min-height: <?php echo esc_attr( $hero_height ) ?>px">
        <div class="hero-container">

                <h1><?php echo esc_html( $hero_title ); ?></h1>
                <p><?php echo  nl2br( esc_html( $hero_subtitle ) ); ?></p>
                <a href="<?php echo esc_url( $hero_button_link ) ?>"><?php echo esc_html( $hero_button_text ) ?></a>

        </div>
    </div>
</section>
        <!-- Dynamic content area -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
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
                            <h2 id="home-blog-header"><?php esc_html_e( 'Latest Articles', 'guitararchive' ); ?></h2>
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
                                    <p><?php esc_html_e( 'There&apos;s nothing here yet!', 'guitararchive' ); ?></p>
                                <?php endif; ?>
                            </div>

                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>