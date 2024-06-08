        <!-- Footer -->
    </div>
    <footer class="site-footer">

            <div class="copyright">
                <p><?php echo esc_html(get_theme_mod( 'set_copyright', __( 'Copyright X - All Rights Reserved', 'guitararchive' ) ) ); ?></p>
                <p><?php echo esc_html(get_theme_mod( 'set_disclaimer', __( 'A disclaimer', 'guitararchive' ) ) ); ?></p>
            </div>
            <nav class="footer-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'guitararchive_footer_menu', 'depth' => 1 )); ?>
            </nav>

    </footer>
<?php wp_footer(); ?>
</body>
</html>