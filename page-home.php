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
                        Mission
                    </section>
                    <!-- Home blog -->
                    <section class="home-blog">
                        <div class="blog-items">
                            <!-- The WordPress loop -->
                            <?php 
                                if( have_posts() ):
                                    while( have_posts() ) : the_post();
                                    ?>
                                    <article class="home-blog-item">
                                        <p><?php echo get_the_date(); ?></p>
                                        <h2><?php the_title(); ?></h2>
                                        <?php the_content(); ?>
                                    </article>
                                    <?php
                                endwhile;
                            else: ?>
                                <p>Nothing yet to be displayed</p>
                            <?php endif; ?>
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>