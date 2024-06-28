<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php if( 'post' == esc_html( get_post_type() ) ): ?>
            <p class="blog-date"><?php echo get_the_date(); ?></p>
            <div class="content">
                <?php the_excerpt(); ?>
            </div>
            <div class="meta-footer">
                <p><?php _e( 'Categories', 'guitararchive' ) ?>: <?php the_category( ' ' ) ?></p>
                <p><?php _e( 'Tags', 'guitararchive' ) ?>: <?php the_tags( '', ', ' ); ?></p>
            </div>
        <?php endif; ?>
    </header>
</article>