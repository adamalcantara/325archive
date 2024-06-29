<?php 
/*
Template Name: Guitar Single Template
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
                                    <article class="guitar-page-item">
                                        <h1 class="page-header"><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </article>
                                    <?php
                                endwhile;
                            else: ?>
                                <p><?php esc_html_e( 'There is not anything here yet.', 'guitararchive' ) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                </main>
            </div>
        </div>
<?php get_footer(); ?>