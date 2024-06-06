<?php get_header(); ?>

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo absint(get_custom_header()->height ); ?>" width="<?php echo absint(get_custom_header()->width ); ?>" alt="" />

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
                                    ?>
                                    <article class="blog-item">
                                        <p class="blog-date"><?php echo get_the_date(); ?></p>
                                        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <?php
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