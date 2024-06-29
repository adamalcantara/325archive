<?php 
/*
Template Name: General Template
*/
?>

<?php get_header(); ?>
<div class="the-header-image">
    <img class="header-img" src="<?php header_image(); ?>" height="<?php echo esc_attr( absint(get_custom_header()->height ) ); ?>" width="<?php echo esc_attr( absint(get_custom_header()->width ) ); ?>" alt="" />
</div>

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
                                    <article class="general-template-item">
                                        <h1 class="page-header"><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </article>
                                    <?php
                                endwhile;
                            else: ?>
                                <p><?php esc_html_e( 'There&apos;s nothing here yet!', 'guitararchive' ) ?></p>
                            <?php endif; ?>
                        </div>
                    </div>

                </main>
            </div>
        </div>
<?php get_footer(); ?>