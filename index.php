<?php get_header(); ?>

<div class="the-header-image">
    <img class="header-img" src="<?php header_image(); ?>" height="<?php echo absint(get_custom_header()->height ); ?>" width="<?php echo absint(get_custom_header()->width ); ?>" alt="" />
</div>

        <!-- Dynamic content area -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <h1 class="page-header">Blog</h1>
                    <section class="main-blog">
                        <div class="blog-items">
                            <!-- The WordPress loop -->
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    get_template_part( 'parts/content' );
                                endwhile;
                                ?>
                                <!-- Pagination -->
                                <div class="guitararchive-pagination">
                                    <div class="pages new">
                                        <?php previous_posts_link( "< Newer Posts") ?>
                                    </div>
                                    <div class="pages old">
                                        <?php next_posts_link( "Older Posts >") ?>
                                    </div>
                                </div>
                                <?php
                            else: ?>
                                <p>Nothing yet to be displayed</p>
                            <?php endif; ?>
                        </div>
                        <div class="the-blog-aside">
                            <div class="searchbox">
                                <?php get_search_form(); ?>
                            </div>
                            <?php get_sidebar(); ?>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>