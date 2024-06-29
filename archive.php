<?php get_header(); ?>

<div class="the-header-image">
    <img class="header-img" src="<?php header_image(); ?>" height="<?php echo esc_attr( absint(get_custom_header()->height ) ); ?>" width="<?php echo esc_attr( absint(get_custom_header()->width ) ); ?>" alt="" />
</div>

        <!-- Dynamic content area -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <?php the_archive_title( '<h1 class="archive-title">', '</h1>' ); ?>
                    <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
                    <section class="main-blog">
                        <div class="archive-items">
                            <!-- The WordPress loop -->
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content', 'archive' );
                                endwhile;
                                ?>
                                <!-- Pagination -->
                                <div class="guitararchive-pagination">
                                    <div class="pages new">
                                        <?php previous_posts_link( esc_html__( "< Newer Posts", 'guitararchive' ) ); ?>
                                    </div>
                                    <div class="pages old">
                                        <?php next_posts_link( esc_html__( "Older Posts >", 'guitararchive' ) ) ?>
                                    </div>
                                </div>
                                <?php
                            else: ?>
                                <p><?php esc_html_e( 'There&apos;s nothing here yet!', 'guitararchive' ) ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="the-blog-aside">
                            <div class="searchbox">
                                <?php esc_html( get_search_form() ); ?>
                            </div>
                            <?php esc_html( get_sidebar() ); ?>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>