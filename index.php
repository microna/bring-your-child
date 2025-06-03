<?php get_header(); ?>

<?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        the_title( '<h1 class="entry-title">', '</h1>' );
        ?>
<div class="entry-content">
    <?php the_content(); ?>
</div>
<?php
      }
    }
    ?>
<?php get_footer(); ?>