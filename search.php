<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div id="content">
            <h1><?php _e( 'Search results for', 'guitararchive' ); ?>: <?php echo get_search_query(); ?></h1>
            <div class="searchbox">
                <?php get_search_form(); ?>
            </div>
            <?php 
                while( have_posts() ):
                    the_post();
                    get_template_part( 'parts/content', 'search' );
                endwhile;
                the_posts_pagination();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>