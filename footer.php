    </main><!-- #main -->
    </div><!-- #primary -->

    <footer id="colophon" class="site-footer">
        <div class="footer-content">
            <div class="footer-info">
            </div>

            <?php if (has_nav_menu('footer')) : ?>
            <nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu', 'bring-your-child'); ?>">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'menu_class'     => 'footer-menu',
                    'depth'          => 1,
                ));
                ?>
            </nav>
            <?php endif; ?>

            <div class="footer-bottom">
                <div class="copyright">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.
                        <?php esc_html_e('All rights reserved.', 'bring-your-child'); ?></p>
                </div>

                <div class="footer-credits">
                    <p><?php esc_html_e('Designed with love for children and families', 'bring-your-child'); ?></p>
                </div>
            </div>
        </div><!-- .footer-content -->
    </footer><!-- #colophon -->

    </div><!-- #page -->

    <?php wp_footer(); ?>
    </body>

    </html>