<?php
/**
 * The main template file
 */

get_header(); ?>

<div class="content-wrapper">
    <?php if (have_posts()) : ?>

    <header class="page-header">
        <?php if (is_home() && !is_front_page()) : ?>
        <h1 class="page-title"><?php single_post_title(); ?></h1>
        <?php elseif (is_home() && is_front_page()) : ?>
        <h1 class="page-title"><?php esc_html_e('Latest Posts', 'bring-your-child'); ?></h1>
        <?php endif; ?>
    </header>

    <div class="posts-container">
        <?php
            // Start the WordPress Loop
            while (have_posts()) :
                the_post();
            ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
            <header class="entry-header">
                <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    </a>
                </div>
                <?php endif; ?>

                <h2 class="entry-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <div class="entry-meta">
                    <span class="posted-on">
                        <time datetime="<?php echo get_the_date('c'); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                    </span>
                    <span class="byline">
                        <?php esc_html_e('by', 'bring-your-child'); ?>
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a>
                    </span>
                    <?php if (has_category()) : ?>
                    <span class="cat-links">
                        <?php esc_html_e('in', 'bring-your-child'); ?>
                        <?php the_category(', '); ?>
                    </span>
                    <?php endif; ?>
                </div>
            </header>

            <div class="entry-content">
                <?php
                        if (is_single()) :
                            the_content();
                        else :
                            the_excerpt();
                        endif;
                        ?>
            </div>

            <footer class="entry-footer">
                <?php if (has_tag()) : ?>
                <div class="tags-links">
                    <?php the_tags('<span class="tags-label">' . esc_html__('Tags:', 'bring-your-child') . '</span> ', ', '); ?>
                </div>
                <?php endif; ?>

                <a href="<?php the_permalink(); ?>" class="read-more">
                    <?php esc_html_e('Read More', 'bring-your-child'); ?>
                </a>
            </footer>
        </article>

        <?php endwhile; ?>
    </div><!-- .posts-container -->

    <?php
        // Pagination
        the_posts_pagination(array(
            'mid_size'  => 2,
            'prev_text' => esc_html__('Previous', 'bring-your-child'),
            'next_text' => esc_html__('Next', 'bring-your-child'),
        ));
        ?>

    <?php else : ?>

    <section class="no-results not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Nothing here', 'bring-your-child'); ?></h1>
        </header>

        <div class="page-content">
            <?php if (is_home() && current_user_can('publish_posts')) : ?>
            <p>
                <?php
                        printf(
                            wp_kses(
                                __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'bring-your-child'),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ),
                            esc_url(admin_url('post-new.php'))
                        );
                        ?>
            </p>
            <?php else : ?>
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'bring-your-child'); ?>
            </p>
            <?php get_search_form(); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php endif; ?>
</div><!-- .content-wrapper -->

<?php get_footer(); ?>