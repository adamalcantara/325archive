<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="error-404">
                <header>
                    <h1 class="page-header">Page not found</h1>
                    <p class="notfound-text">Unfortunately, the page you tried to reach does not exist on this site.</p>
                </header>
                <div class="error">
                    <div class="searchbox">
                        <?php get_search_form(); ?>
                    </div>
                    <?php 
                        the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title' => 'Latest Posts',
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