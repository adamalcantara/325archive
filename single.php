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
                                <h1><?php the_title(); ?></h1>
                                <div class="meta-info">
                                    <p><?php echo get_the_date(); ?></p>
                                </div>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                <div class="meta-footer">
                                    <p>Categories: <?php the_category( ' ' ) ?></p>
                                    <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                </div>
                            </header>
                        </article>
                    <?php
                endwhile;
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>