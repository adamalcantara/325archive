<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div id="content">
            <?php 
                while( have_posts() ):
                    the_post();
                    get_template_part( 'parts/content', 'single' );
                    ?>
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