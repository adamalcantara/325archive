<?php get_header(); ?>

<img class="header-img" src="<?php header_image(); ?>" height="<?php echo absint(get_custom_header()->height ); ?>" width="<?php echo absint(get_custom_header()->width ); ?>" alt="" />

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
                                    ?>
                                    <article class="blog-item">
                                        <p class="blog-date"><?php echo get_the_date(); ?></p>
                                        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <?php
                                endwhile;
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