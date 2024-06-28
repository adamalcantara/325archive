<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-404">
                <header>
                    <h1 class="page-header"><?php _e( 'Page Not Found', 'guitararchive' ); ?></h1>
                    <p class="notfound-text"><?php _e( 'Unfortunately, the page you tried to reach does not exist on this site.', 'guitararchive' ); ?></p>
                </header>
                <div class="error">
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                    <?php 
                        the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => __( 'Latest Posts' ),
                                'number' => 3
                            )
                        );
                    ?>
                </div>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>