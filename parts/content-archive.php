<article class="blog-item">
    <p class="blog-date"><?php echo esc_html( get_the_date() ); ?></p>
    <h2 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
    <?php the_excerpt(); ?>
</article>