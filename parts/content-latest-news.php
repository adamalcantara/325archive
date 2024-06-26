<article class="home-blog-item">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( 'full' ) ?>
    </a>
    <div class="home-blog-info">
        <h2 class="home-blog-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php the_excerpt(); ?>
    </div>
    <!-- Use the esc_html function for security purposes -->
    <p class="home-blog-date"><?php echo esc_html( get_the_date() ); ?></p>
</article>