<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div id="content">
            <?php 
                while( have_posts() ):
                    the_post();
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header>
                                <p class="blog-date"><?php echo get_the_date(); ?></p>
                                <h1 class="blog-title"><?php the_title(); ?></h1>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="meta-footer">
                                    <p>Categories: <?php the_category( ' ' ) ?></p>
                                    <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                </div>
                            </header>
                        </article>
                        <!-- Pagination -->
                        <div class="guitararchive-pagination">
                                    <div class="pages next">
                                        <?php next_post_link( '< %link' ) ?>
                                    </div>
                                    <div class="pages previous">
                                        <?php previous_post_link( '%link >' ) ?>
                                    </div>
                                </div>
                    <?php
                    // Check if there are comments open, then display them
                    if( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>