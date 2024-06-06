<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div id="content">
            <h1>Search results for: <?php echo get_search_query(); ?></h1>
            <div class="searchbox">
                <?php get_search_form(); ?>
            </div>
            <?php 
                while( have_posts() ):
                    the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                <?php if( 'post' == get_post_type() ): ?>
                                    <p class="blog-date"><?php echo get_the_date(); ?></p>
                                    <div class="content">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    <div class="meta-footer">
                                        <p>Categories: <?php the_category( ' ' ) ?></p>
                                        <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                    </div>
                                <?php endif; ?>
                            </header>
                        </article>
                    <?php
                endwhile;
                the_posts_pagination();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>