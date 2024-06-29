<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <p class="blog-date"><?php echo esc_html( get_the_date() ); ?></p>
        <h1 class="blog-title"><?php the_title(); ?></h1>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="meta-footer">
            <p><?php esc_html_e( 'Categories', 'guitararchive' ) ?>: <?php the_category( ' ' ) ?></p>
            <p><?php esc_html_e( 'Tags', 'guitararchive' ) ?>: <?php the_tags( '', ', ' ); ?></p>
        </div>
    </header>
</article>